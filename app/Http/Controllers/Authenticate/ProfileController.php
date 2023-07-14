<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {

        return view('admin.authentication.layouts.pages.profile.show');
    }

    public function editProfile(Request $request)
    {
    }

    public function editPasswd(Request $request)
    {
    }
}
