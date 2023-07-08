<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->route('auth.register');
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('auth.login');
        } catch (\Throwable $th) {
            return redirect()->route('auth.register')->with(['message'=>"Une erreur s\'est produit lors de la connexion"]);
        }
    }

    public function login(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->route('auth.login')->with(['message'=>"Email ou password incorrecte"]);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return redirect()->route('auth.login')->with(['message'=>"Email ou password incorrecte"]);
            }

            $user = User::where('email', $request->email)->first();

            return redirect()->route('admin.home');

            // return view('admin.authentication.admin-home');
        } catch (\Throwable $th) {
            return redirect()->route('auth.login')->with(['message'=>"Une erreur s\'est produit lors de la connexion"]);
        }
    }
    public function logout(Request $request)
    {
        $user = $request->user();

        // Mise à jour de l'attribut is_online
        $user->update(['is_online' => false]);

        $user->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Successfully logged out.',
        ], 200);
    }
    public function LoginView(Request $request){
        return view('guest.auth.login');
    }
    public function RegisterView(Request $request){
        return view('guest.auth.register');
    }
}
