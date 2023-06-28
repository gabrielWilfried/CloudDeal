<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AnnonceGuestController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        // Vous pouvez ajouter ici du code supplémentaire pour envoyer des e-mails, enregistrer des informations supplémentaires, etc.

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

}
