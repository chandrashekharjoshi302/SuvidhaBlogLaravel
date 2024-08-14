<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    //to show ui and table 

    public function index()
    {
        $contactData = Crud::all();
        return view('crud.index', compact('contactData'));
    }



    //to save data ;

    public function indexData(Request $request)
    {

        $request->validate([
            'sname' => 'required|string|max:255',
            'sage' => 'required|string',
            'scity' => 'required|string'
        ]);


        Crud::create([
            'sname' => $request->input('sname'),
            'sage' => $request->input('sage'),
            'scity' => $request->input('scity')
        ]);

        return redirect()->route('index')->with('success', 'Crud saved successfully.');
    }


    //to delete data 

    public function indexDataDelete($id)
    {
        $CrudId = Crud::find($id);

        if ($CrudId) {
            $CrudId->delete();
        }
        return redirect()->route('index')->with('success', 'crud deleted successfully.');
    }

    public function indexEdit(Request $request, $id)
    {

        $contact = Crud::findOrFail($id);
        return view('crud.edit', compact('contact'));
    }

    public function indexUpdate(Request $request, $id)
    {

        $contact = Crud::findOrFail($id);



        // Update the contact with the request data
        $contact->update([
            'sname' => $request->input('sname'),
            'sage' => $request->input('sage'),
            'scity' => $request->input('scity'),
        ]);

        // Redirect to the contact index route with a success message
        return redirect()->route('index')->with('success', 'Crud updated successfully.');
    }
}
