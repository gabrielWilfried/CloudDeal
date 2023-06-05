<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    //
    use SendsPasswordResetEmails;

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response == \Illuminate\Support\Facades\Password::RESET_LINK_SENT) {
            return response()->json(['message' => 'Reset link sent successfully']);
        } else {
            return response()->json(['message' => 'Unable to send reset link'], 500);
        }
    }
}
