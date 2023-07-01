<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class AnnonceGuestController extends Controller
{

    public function showAd($id)
{
    $name = "Ad Detail";
    $head = "Dashboard";
    $annonces = Annonce::orderBy('level', 'desc')->take(4)->get();
    $ad = Annonce::findOrFail($id);
    $comments = $ad->comments; 

    
    return view('user.layouts.partials.single-ad', compact('name', 'head', 'ad', 'comments', 'annonces'));
}

      
}
