<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Models\Town;
use App\Models\Boost;
use App\Models\Category;
use App\Models\Annonce;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AnnonceGuestController extends Controller
{
    public function paginatedAds(Request $request)
    {
        $limit = $request->get('limit', 9);
        $towns = Town::all();
        $boost = Boost::orderBy('score', 'DESC')->take(3)->pluck('annonce_id');
        $BestAds = Annonce::where('is_blocked', false)->whereIn('id', $boost)->get();
        $search = '%' . $request->get('search', '') . '%';
        $priceFilter = $request->get('filterPrice', '');
        $query = Annonce::where('is_blocked', false);
        if($priceFilter != '' && $priceFilter != '0,0'){
            $price = explode(',', $priceFilter);
            $query=$query->whereBetween('price', [floatval($price[0]), floatval($price[1])]);
        }
        if ($request->has('categories') && !blank($request->input('categories'))) {
            $categoryIds = array_map('intval', explode(',', $request->input('categories')));
            $query->whereIn('category_id',  $categoryIds);
        }
        if ($request->has('town') && ($request->input('town')!=='undefined')) {
            $townId = $request->input('town');
            $query->where('town_id', '=', $townId);
        }
        $annonces = $query->where('name', 'LIKE', $search)->orderByDesc('level')->paginate($limit);
        return response()->json(['towns' => $towns, 'annonces' => $annonces, 'BestAds' => $BestAds ]);
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
      
        $annonces = Annonce::orderBy('level', 'desc')->take(4)->get();
        $ad = Annonce::findorfail($id);
        $ad->load('comments', 'category', 'town', 'user');
        return view('guest.layouts.pages.ad-detail',  compact('ad','annonces'));
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
