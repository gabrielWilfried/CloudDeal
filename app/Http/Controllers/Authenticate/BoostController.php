<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Boost;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;


class BoostController extends Controller
{
    public function store(Request $request, Annonce $annonce)
    {
        $request->validate([
            'price' => 'required|numeric|min:0',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at'
        ]);

        $price = $request->price;
        $startAt = Carbon::parse($request->start_at);
        $endAt = Carbon::parse($request->end_at);
        $numberOfDays = $startAt->diffInDays($endAt);
        $score =  round(($price / $numberOfDays) * $annonce->price);
        $boost = Boost::create([
            'price' => $price,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'score' => $score,
            'annonce_id' => $annonce->id,
        ]);

        $annonce->level += $score;
        $annonce->save();
        return response()->json(['message' => 'Boosted sucesfully']);
    }
}
