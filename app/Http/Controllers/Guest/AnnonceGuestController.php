<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AnnonceGuestController extends Controller
{
    public function paginatedAds(Request $request)
    {
        $name= "Dashboard";
        $head = "Dashboard";
        $limit = $request->get('limit', 9);
        $annonces = Annonce::where('is_blocked', false)->orderByDesc('level')->paginate( $limit);
        $towns = Town::all();
        return response()->json(['towns' => $towns, 'annonces' => $annonces]);
    }

    public function index(Request $request)
    {
        $name= "Dashboard";
        $head = "Dashboard";
        $limit = $request->get('limit', 9);
        $annonces = Annonce::where('is_blocked', false)->orderByDesc('level')->paginate( $limit);
        $towns = Town::all();
        return view('guest.layouts.pages.all-ads', compact('annonces', 'towns'));
    }


    public function showAd($id)
    {
        $name = "Ad Detail";
        $head = "Dashboard";
        $annonces = Annonce::orderBy('level', 'desc')->take(4)->get();
        $ad = Annonce::findorfail($id);
        return view('guest.layouts.pages.ad-detail',  compact('name', 'head', 'ad', 'annonces'));
    }

    public function searchByCategory($category_id){
        $towns = Town::all();
        $annonces = Annonce::where('category_id','=',$category_id)->where('is_blocked', false)->orderByDesc('level')->get();
        return response()->json(['towns' => $towns, 'annonces' => $annonces]);
    }

    public function search(Request $request, $town_id){

        $towns = Town::all();

       if ($request->has('category_id')) {
        $category_id = $request->input('category_id');
        $annonces = Annonce::where('category_id','=',$category_id)->where('is_blocked', false)->orderByDesc('level')->get();
        return response()->json(['towns' => $towns, 'annonces' => $annonces]);
        //dd($annonces);
    }

    }
    public function detailsAnnonce(Annonce  $annonce)
    {
        $annonce->load('comments', 'category', 'town');
        return response()->json($annonce);
    }

}
