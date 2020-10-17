<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index',
            [
                'contacts' => Contact::all()]);
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
            'type' => 'required|integer|digits:1',
        ]);

        Contact::create($validatedData);

        return redirect()->route('admin.contact.index');

    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit',
            [
                'contact' => $contact
            ]);

    }

    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([

            'content' => 'required|string|max:255',
            'type' => 'required|integer',
        ]);

        $contact->update($validatedData);

        return redirect()->route('admin.contact.index');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact.index');
    }

}
