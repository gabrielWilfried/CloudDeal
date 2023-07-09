<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class HomeAuthenticateController extends Controller
{
    public function index()
    {
        //$messages = Contact::all();
        $unreadMessageCount = Contact::where('is_read', false)->count();
        View::share('unreadMessageCount', $unreadMessageCount);

        view()->share('unreadMessageCount', $unreadMessageCount);


        return view('admin.authentication.admin-home');
    }
}