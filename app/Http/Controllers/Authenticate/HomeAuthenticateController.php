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
        return view('admin.authentication.admin-home');
    }
}
