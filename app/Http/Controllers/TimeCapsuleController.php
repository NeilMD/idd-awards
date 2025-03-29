<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use App\Models\DesignSubmission;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

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

            $oldImage = DesignSubmission::where('email',$validatedData['email'])->value('image_path');
            if ($oldImage) {
                Storage::delete('oldImage');
            }
            
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('uploads/images', 'public');
            }
            $mailCode = $this->sendEmail($validatedData, $imagePath);
            // Save data to the database using the model
            DesignSubmission::updateOrCreate(
                ['email' => $validatedData['email']],
                [
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
                'mailCode' =>$mailCode
            ], 200);

        } catch (ValidationException $e) {
            // If validation fails, return JSON response with errors
            return response()->json([
                'success' => false,
                'errors' => $e->errors(), // Validation errors will be automatically available here
            ], 422); 
        }

    }

    public function verify(Request $request, $email)

    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }
       
        $updated = DesignSubmission::where('email',$email)->update(['isVerified'=> true]);
        
        if ($updated) {

        } else {
            echo 'No records were verified.';
        }

       
    }
    private function sendEmail($validatedData, $imagePath) {

        // Additional dynamic data
        $subject = "Verify your Upload";
        
        $signedUrl = URL::temporarySignedRoute(

            'verify', now()->addMinutes(3000), ['email' => $validatedData['email']]
        
        );

        // Render the Blade view to HTML
        $viewContent = view('components.email.design-verification', [
            'designTitle' => $validatedData['design_title'],
            'category' => $validatedData['design_category'],
            'description' => $validatedData['design_description'],
            'designImageUrl' => $imagePath,
            'verificationUrl' => $signedUrl
        ])->render();

        // Email details
        $to = $validatedData['email']; // The recipient's email address
        $headers = "From: submissions@interactivedesign.ca\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Specify HTML content type

        // Send the email using PHP's mail() function
        if (mail($to, $subject, $viewContent, $headers)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function generateUrl(Request $request)

    {
        return URL::temporarySignedRoute(

            'verify', now()->addMinutes(30), ['email' => 'temp@edu.sait.ca']
        
        );
    }

    public function show()

    {   
        $submissions = DesignSubmission::orderBy('updated_at', 'desc')->where('isVerified',true)->get();
        
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
