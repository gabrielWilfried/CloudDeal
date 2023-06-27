<?php

namespace App\Http\Controllers\Guest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'email' => 'required | email | unique:suscribed_emails,email'
        ]);

        DB::table('suscribed_emails')->insert([
            'email' => $request->email,
            'created_at' => now(),
        ]);

        return response()->json(['ok' => true]);
    }
}
