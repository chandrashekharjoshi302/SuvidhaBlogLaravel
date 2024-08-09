<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

        $contactData = Contact::all();
        return view('contact.index', compact('contactData'));
    }

    public function add()
    {

        return view('contact.add');
    }
    public function update()
    {

        return view('contact.update');
    }
    public function edit(Request $request, $id)
    {

        $contact = Contact::findOrFail($id);


        return view('contact.edit', compact('contact'));
    }
    public function delete()
    {

        return view('contact.delete');
    }

    public function saveData(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'class' => 'required|string', // Fixed the double pipe symbol
            'phone_number' => 'required|numeric' // Added numeric validation for phone_number
        ]);

        // Create a new Contact entry
        Contact::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'class' => $request->input('class'),
            'phone_number' => $request->input('phone_number'),
        ]);

        // Redirect to the contact index route with a success message
        return redirect()->route('contact_index')->with('success', 'Contact saved successfully.');
    }


    public function contact_delete_id(Request $request, $id)
    {

        // dd($id);
        // // Validate the ID if needed


        // Find the contact by ID and delete it
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
        }

        // Redirect to the contact index route
        return redirect()->route('contact_index')->with('success', 'Contact deleted successfully.');
    }

    public function EditData(Request $request, $id)
    {

        // Validate the request data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string',
        //     'class' => 'required|string',
        //     'phone_number' => 'required|numeric',
        // ]);

        // Find the contact by ID
        $contact = Contact::findOrFail($id);



        // Update the contact with the request data
        $contact->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'class' => $request->input('class'),
            'phone_number' => $request->input('phone_number'),
        ]);

        // Redirect to the contact index route with a success message
        return redirect()->route('contact_index')->with('success', 'Contact updated successfully.');
    }

    public function UpdateM(Request $request)
    {

        // dd($request);
        $idd = $request->input('id_name');

        $contact = Contact::findOrFail($idd);


        return view('contact.update', compact('contact'));
    }


    public function contact_delete_idM(Request $request)
    {

        // dd($id);
        // // Validate the ID if needed

        $idd = $request->input('id_delete');
        // Find the contact by ID and delete it
        $contact = Contact::find($idd);

        if ($contact) {
            $contact->delete();
        }

        // Redirect to the contact index route
        return redirect()->route('contact_index')->with('success', 'Contact deleted successfully.');
    }
}
