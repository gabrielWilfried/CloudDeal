<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\Str;



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
            return redirect()->route('auth.register')->with(['message' => "Une erreur s\'est produit lors de l\inscription"]);
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
                return redirect()->route('auth.login')->with(['message' => "Email ou password incorrecte"]);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return redirect()->route('auth.login')->with(['message' => "Email ou password incorrecte"]);
            }

            $user = User::where('email', $request->email)->first();

            return redirect()->route('admin.home');
            // return view('admin.authentication.admin-home');
        } catch (\Throwable $th) {
            return redirect()->route('auth.login')->with(['message' => "Une erreur s\'est produit lors de la connexion"]);
        }
    }
    /*  public function logout(Request $request)
    {
        $user = $request->user();

        // Mise à jour de l'attribut is_online
       // $user->update(['is_online' => false]);

        $user->tokens()->delete();

        return view('guest.layouts.pages.all-ads');
    }
    */

    public function logout(Request $request)
    {
        $user = $request->user();

        Auth::logout(); // Déconnexion de l'utilisateur en cours

        return redirect()->route('home');  // Redirection vers la page d'accueil ou une autre page appropriée après la déconnexion
    }

    public function LoginView(Request $request)
    {
        return view('guest.auth.login');
    }
    public function RegisterView(Request $request)
    {
        return view('guest.auth.register');
    }
    public function showLoginModal(Request $request)
    {
        return view('auth.login-modal', ['url' => $request->fullUrl()]);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Vérifiez si l'utilisateur existe déjà dans votre base de données ou créez un nouveau compte
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Connectez l'utilisateur
            Auth::login($existingUser);
        } else {
            // Créez un nouveau compte pour l'utilisateur
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make(Str::random(16)) // Générez un mot de passe aléatoire
            ]);

            // Connectez le nouvel utilisateur
            Auth::login($newUser);
        }

        // Redirigez l'utilisateur vers la page appropriée après l'authentification
        return redirect()->route('admin.home');
    }
}
