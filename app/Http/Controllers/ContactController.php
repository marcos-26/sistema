<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function Contact()
    {
        $contact = Contact::all();
        return view('contact', ['contact' => $contact]);
    }
}
