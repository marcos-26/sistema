<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function Contact()
    {
        $contact = Contact::all();
        return view('Contact', ['contact' => $contact]);
    }
}
