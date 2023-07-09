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

        $ads = Annonce::where('is_blocked', false)->orderBy('level', 'DESC')->take(4)->get();
        $categories = Category::inRandomOrder()->take(5)->get();
        return view('guest.home', compact('ads', 'categories'));
    }

    public function paginatedAds(Request $request)
    {
        $perpage = $request->get('per_page', 8);
        $allAds = Annonce::where('is_blocked', false)->orderBy('level', 'DESC')->paginate($perpage);
        return response()->json(["allAds" => $allAds]);
    }
}
