<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('index.contact_us');
    }

        public function submit(Request $request)
        {
            // Validate the incoming request
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                // 'g-recaptcha-response' => 'required|recaptcha',  // Google reCAPTCHA validation
            ]);

            // Optionally store the form data in the database
            ContactUs::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'subject' => $validatedData['subject'],
                'message' => $validatedData['message'],
            ]);

            // Send an email (optional)
            // Mail::to('admin@example.com')->send(new ContactUsMail($validatedData));

            // Redirect back with a success message
            return redirect()->route('contact_us')->with('status', 'Your message has been sent!');
        }

}
