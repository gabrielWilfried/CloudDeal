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
        $towns = Town::all();
        $search = '%' . $request->get('search', '') . '%';
        $limit = $request->get('limit', 9);
        $annonces = Annonce::where('is_blocked', false)->where('name', 'LIKE', $search);

        if ($request->has('categories') && !blank($request->input('categories'))) {
            $categoryIds = array_map('intval', explode(',', $request->input('categories')));
            $annonces = $annonces->whereIn('category_id',  $categoryIds);
        }

        if ($request->has('town') && ($request->input('town')!=='undefined')) {
            $townId = $request->input('town');
            $annonces = $annonces->where('town_id', '=', $townId);
        }

        $annonces = $annonces->orderByDesc('level')->paginate($limit);

        return response()->json(['towns' => $towns, 'annonces' => $annonces]);
    }

    public function index(Request $request)
    {
        $name = "Dashboard";
        $head = "Dashboard";
        $limit = $request->get('limit', 9);
        $annonces = Annonce::where('is_blocked', false)->orderByDesc('level')->paginate($limit);
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

    public function search(Request $request)
    {

        $annonces = Annonce::where('is_blocked', false)->with(['town', 'category'])->orderByDesc('level')->paginate(9); //

        //Sort by name
        if ($request->has('name')) {
            $annonces->where('name', 'like', '%' . $request->input('name') . '%');
            $annonces->whereIn('category_id',  $request->categories);
        }


        //Sort by categories
        if ($request->has('categories')) {
            $annonces->whereIn('category_id',  $request->categories);
            dd($annonces);
        }

        //Sort by town
        if ($request->has('town')) {
            $annonces->whereHas('town', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->input('town') . '%');
            });
        }

        //Sort by price in a given interval
        if ($request()->has('price_min') && $request()->has('price_max')) {
            $price_min = (int) $request('price_min');
            $price_max = (int) $request('price_max');
            $annonces->whereBetween('price', [$price_min, $price_max]);
        }


       $annonces = $annonces->get();
       return response()->json($annonces);
    }
    public function detailsAnnonce(Annonce  $annonce)
    {
        $annonce->load('comments', 'category', 'town');
        return response()->json($annonce);
    }
}
