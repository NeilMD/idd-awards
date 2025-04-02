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

            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('uploads/images', 'public');
            }

            $mailCode = 0;
            $oldImage = DesignSubmission::where('email',$validatedData['email'])->value('image_path');
            if ($oldImage) {
                // User already uploaded before
                Storage::delete('oldImage');
            } else {
                // New User. Send Email
                $mailCode = $this->sendEmail($validatedData, $imagePath);
            }
            
            // Update or Create data to the database 
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
        // Check if the signature is valid
        if (!$request->hasValidSignature()) {
            abort(401);
        }

        if ($request->boolean('agree') !== true) {
            return; // Do nothing if 'agree' is not explicitly checked
        }

        $updated = DesignSubmission::where('email',$email)->update(['isVerified'=> true]);

        return redirect()->away('https://interactivedesign.ca/time-capsule#gallery-section');
       
    }

    
    public function confirm(Request $request, $email){

       
        // Check if the signature is valid
        if (!$request->hasValidSignature()) {
            abort(401);
        }

        $signedUrl = URL::temporarySignedRoute(

            'verify', now()->addMinutes(3000), ['email' => $email]
        
        );

        // Retrieve the design submission
        $design = DesignSubmission::where('email', $email)->first();

        // Check if the record exists
        if (!$design) {
            abort(404, 'Submission not found.');
        }

        // Transform data and add verifyUrlLink
        $designData = [
            'imageUrl' => asset('storage/' . $design->image_path), // Assuming stored in 'public' disk
            'title' => $design->design_title,
            'name' => $design->name,
            'description' => $design->design_description,
            'email' => $design->email,
            'link' => $design->link,
            'design_category' => $design->design_category,
            'verificationUrl' => $signedUrl,
        ];

        // Return the email verification view instead of 'time-capsule'
        return view('components.email.design-verification', [
            'designTitle' => $design->design_title,
            'category' => $design->design_category,
            'description' => $design->design_description,
            'designImageUrl' => $designData['imageUrl'],
            'verificationUrl' => $signedUrl,
            'email' => $email
        ]);
    }

    private function sendEmail($validatedData, $imagePath) {

        // Additional dynamic data
        $subject = "IGNITE AWARDS – Confirm Your Submission";
        
        $signedUrl = URL::temporarySignedRoute(

            'confirm', now()->addMinutes(3000), ['email' => $validatedData['email']]
        
        );

        // Render the Blade view to HTML
        $viewContent = view('components.email.email-redirect', [
            'verificationUrl' => $signedUrl,
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

            'confirm', now()->addMinutes(30), ['email' => 'capsitra@edu.sait.ca']
        
        );
    }

    public function show()

    {  
        $submissions = DesignSubmission::orderBy('updated_at', 'desc')
        ->where('isVerified', true)
        ->paginate(10);
        
        $submissions->withPath('time-capsule/load-more');
            // You can map your data here if needed but retain pagination
        $submissions->getCollection()->transform(function ($submission) {
            return [
                'imageUrl' => asset('storage/' . $submission->image_path), // Assuming the image is stored in the 'public' disk
                'title' => $submission->design_title,
                'name' => $submission->name,
                'description' => $submission->design_description,
                'email' => $submission->email,
                'link' => $submission->link,
                'design_category' => $submission->design_category,
            ];
        });
        
        
        // Pass the formatted memories data to the view
        return view('time-capsule', compact('submissions'));
    }

    public function loadMore(Request $request )

    {  
        // Retrieve 'category' from the query parameters (defaults to 'all' if not provided)
        $category = $request->query('category', 'all');
        
        // Retrieve 'page' from the query parameters (defaults to 1 if not provided)
        $page = $request->query('page', 2);


        $submissions = DesignSubmission::orderBy('updated_at', 'desc')
                        ->where('isVerified', true)
                        ->when($category !== 'all', function ($query) use ($category) {
                            return $query->where('design_category', $category);
                        })
                        ->paginate(10);
       
            // You can map your data here if needed but retain pagination
        $submissions->getCollection()->transform(function ($submission) {
            return [
                'imageUrl' => asset('storage/' . $submission->image_path), // Assuming the image is stored in the 'public' disk
                'title' => $submission->design_title,
                'name' => $submission->name,
                'description' => $submission->design_description,
                'email' => $submission->email,
                'link' => $submission->link,
                'design_category' => $submission->design_category,
            ];
        });
        
        
        // Render the submissions partial view and pass the submissions
        $submissionsHtml = view('components.section.memories', compact('submissions'))->render();

        // Return the data as a JSON response, including the rendered partial HTML
        return response()->json([
            'submissionsHtml' => $submissionsHtml,
            'nextPageUrl' => $submissions->nextPageUrl()
        ]);
    }
}
