<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Town;
use Illuminate\Http\Request;


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
      
        $annonces = Annonce::orderBy('level', 'desc')->take(4)->get();
        $ad = Annonce::findorfail($id);
        $ad->load('comments', 'category', 'town', 'user');
        return view('guest.layouts.pages.ad-detail',  compact('ad','annonces'));
    }

    public function search(Request $request, $category_id, $town_id){

        $towns = Town::all();

        if (Route::current()->parameter('category_id')) {
            $annonces = Annonce::where('category_id','=',$category_id)->where('is_blocked', false)->orderByDesc('level')->get();
            return response()->json(['towns' => $towns, 'annonces' => $annonces]);
        }

        // Sort by town
        // if ($request->has('town')) {
        //     $annonces->whereHas('town', function($query) use($request) {
        //         $query->where('name', 'like', '%'.$request->input('town').'%');
        //     });
        // }


        // $annonces = $annonces->get();
        // return response()->json($annonces);

    }
    public function detailsAnnonce(Annonce  $annonce)
    {
        $annonce->load('comments', 'category', 'town');
        return response()->json($annonce);
    }

   

}
