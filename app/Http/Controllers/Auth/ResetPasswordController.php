<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Reset the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function reset(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());

        // Rechercher un utilisateur via son email
        $user = User::where('email', $request->email)->first();

        // Générer et modifier le nouveau mot de passe
        $user->password = bcrypt($request->password);
        $user->save();

        // Perform any additional tasks, such as sending email notifications

        return response()->json(['message' => 'Password reset successfully']);
    }
}
