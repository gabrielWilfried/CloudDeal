<?php

namespace App\Http\Controllers\Authenticate;

use Illuminate\Http\Request;
use Carbon\Carbon;


class BoostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
            'annonce_id' => 'required|exists:annonces,id',
        ]);

        $annonce = Annonce::findOrFail($request->annonce_id);

        if ($request->start_at >= $request->end_at) {
            return response()->json(['error' => 'La date de début doit être antérieure à la date de fin.'], 422);
        }
        

        $score = 0;
        $price = $request->price;
        $numberOfDays = $request->start_at->diffInDays($request->end_at);

        if ($numberOfDays < 15) {
            $score = (0.03 * $annonce->price) / $price;
        } elseif ($numberOfDays < 30) {
            $score = (0.027 * $annonce->price) / $price;
        } elseif ($numberOfDays < 40) {
            $score = (0.022 * $annonce->price) / $price;
        } else {
            $score = (0.015 * $annonce->price) / $price;
        }

        // Create the boost
        $boost = Boost::create([
            'price' => $price,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'score' => $score,
            'annonce_id' => $request->annonce_id,
        ]);

        
        $annonce->level += $score;
        $annonce->save();

        
        return response()->json(['message' => 'Boost created successfully', 'boost' => $boost], 201);
    }
}
    //

