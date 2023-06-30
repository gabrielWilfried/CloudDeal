<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('guest.layouts.pages.contact');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'fname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'msg' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
