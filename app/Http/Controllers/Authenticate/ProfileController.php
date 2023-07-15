<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {

        return view('admin.authentication.layouts.pages.profile.show');
    }

    public function editProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pseudo' => 'required',
            'email' => 'required'
        ]);

        $user = User::find(auth()->id());

        $user->name = $request->input('name');
        $user->pseudo = $request->input('pseudo');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        $user->save();

        return redirect()->back()->with('message', 'Profile changed successfully');
    }


    public function editPasswd(Request $request)
    {
        $request->validate([
            'currentPass' => 'required',
            'newPass' => 'required|min:5',
            'confirmPass' => 'required|same:newPass'
        ]);

        $user = User::find(auth()->id());


        if (!password_verify($request->input('currentPass'), $user->password)) {
            return redirect()->back()->with('message', 'The current password is incorrect');
        }


        $user->password = bcrypt($request->input('newPass'));
        $user->save();

        return redirect()->back()->with('message', 'The password has been changed successfully');
    }
}
