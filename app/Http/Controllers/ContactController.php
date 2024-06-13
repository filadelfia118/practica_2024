<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validează datele din formular
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Salvează datele în baza de date
        $contact = Contact::create($validatedData);

        return redirect()->back()->with('success', 'Mesajul a fost trimis cu succes!');
    }

    public function index()
    {
        // Selectează toate contactele din baza de date
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }
}
