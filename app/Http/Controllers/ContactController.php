<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::all();
        return view('contato', ['contato' => $contact]);
    }
}
