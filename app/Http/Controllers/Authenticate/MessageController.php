<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Contact::all();
        $unreadMessageCount = Contact::where('is_read', false)->count();
        return view('admin.authentication.layouts.pages.message', compact('messages', 'unreadMessageCount'));
    }

    public function markAsRead($id)
    {
        $message = Contact::findOrFail($id);
        $message->is_read = true;
        $message->save();

        return redirect()->back();
    }
}