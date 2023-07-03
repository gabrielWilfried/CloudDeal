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
        $annonces = Annonce::orderBy('level', 'desc')->take(4)->get();
        $ad = Annonce::findorfail($id);
        return view('guest.layouts.pages.ad-detail',  compact('name', 'head', 'ad', 'annonces'));
    }
}
