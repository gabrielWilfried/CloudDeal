<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceGuestController extends Controller
{

    public function showAd($id)
    {
        $name = "Ad Detail";
        $head = "Dashboard";
        $ad = Annonce::findorfail($id);
        return view('user.layouts.partials.single-ad',  compact('name', 'head', 'ad'));
    }
}
