<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function view()
    {
        $contacts = Contact::first();

        return view('contactPage',[
            'contacts' => $contacts
        ] );
    }

    public function destroy(\Illuminate\Http\Request $request)
    {
    }


    public function store(Request $request)
    {

    }

}
