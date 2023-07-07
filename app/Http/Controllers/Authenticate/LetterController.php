<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Suscribed_email;
use \App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class LetterController extends Controller
{
    public function show()
    {
        $unreadMessageCount = Contact::where('is_read', false)->count();
        $letters = Suscribed_email::get();
        return view('admin.authentication.layouts.pages.letter', compact('letters', 'unreadMessageCount'));
    }
}