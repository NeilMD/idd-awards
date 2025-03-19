<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Contact;

/**
 * HomeController handles the home page, about us, and contact form actions.
 */
class HomeController extends BaseController
{
    /**
     * Displays the home page.
     *
     * @return void
     */
    public function index(): void
    {
        $this->render('home', ['title' => 'Home Page']);
    }

    /**
     * Displays the about us page.
     *
     * @return void
     */
    public function about(): void
    {
        $this->render('about', ['title' => 'About Us']);
    }

    /**
     * Displays the contact form and handles the form submission.
     *
     * @param Request $request
     * @return void
     */
    public function contact(Request $request): void
    {
        if ($request->isPost()) {
            $data = $request->getBody();
            
            // Validate contact form data here (you can move validation logic to a separate service)
            
            $contact = new Contact();
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->message = $data['message'];
            $contact->save();

            // Redirect or render success message
            $this->redirect('/thank-you');
        }

        // Show the contact form
        $this->render('contact', ['title' => 'Contact Us']);
    }

   // Public method to access the protected notFound() method
   public function showNotFound()
   {
       $this->notFound();  // Calls the protected notFound() method from BaseController
   }
}