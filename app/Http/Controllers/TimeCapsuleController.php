<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\URL;
use App\Models\DesignSubmission;

class TimeCapsuleController extends Controller
{
    /**

    * Show the profile for a given user.

    */
    public function submit(Request $request)

    {
        try {
            // Validate form input
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'design_title' => 'required|string|max:255',
                'design_description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'design_category' => 'required|in:graphic,ux,web', // Ensures only valid categories can be selected
                'link' => [
                    'required_if:design_category,ux,web', // Requires link if category is ux or web
                    'nullable', // Allows null for other categories
                    'url', // Ensures it's a valid URL format
                ],
                'email' => [
                    'required', // Makes email required
                    'email', // Ensures it's a valid email format
                    'regex:/^[a-zA-Z0-9._%+-]+@(edu\.sait\.ca|sait\.ca)$/', // Ensures the email is from edu.sait.ca or sait.ca
                ],
            ]);

            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('uploads/images', 'public');
            }

            // Save data to the database using the model
            DesignSubmission::create([
                'name' => $validatedData['name'],
                'design_title' => $validatedData['design_title'],
                'design_description' => $validatedData['design_description'],
                'design_category' => $validatedData['design_category'],
                'email' => $validatedData['email'],
                'link' => $validatedData['link'],
                'image_path' => $imagePath,
            ]);

            // Return success response as JSON
            return response()->json([
                'success' => true,
                'message' => 'Design submitted successfully!',
            ], 200);

        } catch (ValidationException $e) {
            // If validation fails, return JSON response with errors
            return response()->json([
                'success' => false,
                'errors' => $e->errors(), // Validation errors will be automatically available here
            ], 422); 
        }

    }

    public function verify(Request $request)

    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }

        echo 'success';
    }

    public function generateUrl(Request $request)

    {
        return URL::temporarySignedRoute(

            'verify', now()->addMinutes(30), ['email' => 'neilcydric.capistrano@gmail.com']
        
        );
    }

    public function show()

    {   
        $submissions = DesignSubmission::orderBy('created_at', 'desc')->get();
        
        // Format the data as memories for the view
        $memories = $submissions->map(function($submission) {
            return [
                'imageUrl' => asset('storage/' . $submission->image_path), // Assuming the image is stored in the 'public' disk
                'title' => $submission->design_title,
                'name' => $submission->name,
                'description' => $submission->design_description,
                'email' => $submission->email,
                'link' => $submission->link,
                'design_category' => $submission->design_category
            ];
        });
        
        // Pass the formatted memories data to the view
        return view('time-capsule', compact('memories'));
    }
}
