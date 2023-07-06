<?php

namespace App\Http\Controllers\Guest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email | unique:suscribed_emails,email'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed']);
        }

        DB::table('suscribed_emails')->insert([
            'email' => $request->email,
            'created_at' => now(),
        ]);

        return response()->json(['status' => 'success']);
    }
}
