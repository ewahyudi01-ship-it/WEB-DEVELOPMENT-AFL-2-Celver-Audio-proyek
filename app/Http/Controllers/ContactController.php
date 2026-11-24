<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function viewUser()
    {
        $contact = Contact::first();

        return view('contactPage',[
            'contact' => $contact
        ] );
    }

    public function view()
    {
        $contact = Contact::first();
        return view('dashboard-editView.Contact.listContact',[
            'contact' => $contact
        ] );
    }

    public function edit(Contact $contact)
    {
        return view('dashboard-editView.Contact.updateContact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
        'whatsapp' => 'required|string|max:50|min:1',
        'gmail' => 'required|string|max:100',
        'lokasi'  => 'required|string|max:500|min:1',
        ]);

        $contact->update($data);

    return redirect('/dashboard/view/list-contact/');
    }

}
