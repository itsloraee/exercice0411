<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
         return view('contact.index' , compact('contacts')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contact.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        $validated = $request->validate
        ([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:contacts,email',
        'phone' => 'required|integer|min:3',
        'address'=>'required|string|max:255',
        'company'=>'required|string|max:255'
        ]);

        $contact = Contact::create($validated);
        dd($contact);
        return redirect()->route('contacts.index')->with('success', 'Contact ajouté avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
        return view('contact.show') ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
