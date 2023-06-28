<?php

namespace App\Http\Controllers\Guest;
use App\Models\Annonce;
use App\Models\Boost;
use App\Models\Category;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index(Request $request)
    {
       
        $boost = Boost::all()->sortBy('score', SORT_REGULAR, true)->take(5)->pluck('annonce_id');
        $ads = Annonce::all()->where('is_blocked', false)->whereIn('id', $boost);
        $categories = Category::inRandomOrder()->take(5)->get();
        $allAds = Annonce::all()->where('is_blocked', false)->sortBy('level', SORT_REGULAR, true);
        //dd($allAds);
        return view('user.home', compact('ads', 'categories', 'allAds', 'allCategories'));
    }


}
