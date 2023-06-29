<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceGuestController extends Controller
{
    public function listAnnonces(Request $request)
    {

        $limit = $request->get('limit', 15);
        $annonces = Annonce::orderByDesc('level')->where('is_blocked', false)->paginate($limit);
        return response()->json($annonces);
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
        $annonces = Annonce::with(['town', 'category'])->where('is_blocked', false)->orderByDesc('level');

        // Sort by name
        if ($request->has('name')) {
            $annonces->where('name' , 'like', '%'.$request->input('name').'%');
        }

        // Sort by category
        if ($request->has('category')) {
            $annonces->whereHas('category', function($query) use($request) {
                $query->where('name', 'like', '%'.$request->input('category').'%');
            });
        }

        // Sort by town
        if ($request->has('town')) {
            $annonces->whereHas('town', function($query) use($request) {
                $query->where('name', 'like', '%'.$request->input('town').'%');
            });
        }

        // Sort by region
        if ($request->has('region')) {
            $annonces->whereHas('town', function($query) use($request) {
                $query->where('region_id->name', 'like', '%'.$request->input('region').'%');
            });
        }

        // sorting by category and price (in the range 30% discount on the actual price and 30% increase on the actual price)
        if ($request->has('category_price')) {
            $categoryPriceRange = explode(',', $request->input('category_price'));
            $minPrice = $categoryPriceRange[1] * 0.7;
            $maxPrice = $categoryPriceRange[1] * 1.3;

            $query->whereHas('category', function ($q) use ($categoryPriceRange) {
                $q->where('id', $categoryPriceRange[0]);
            })->whereBetween('price', [$minPrice, $maxPrice]);
        }
        $annonces = $annonces->get();
        return response()->json($annonces);

    }
}
