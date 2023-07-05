<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AnnonceController extends Controller
{
    public function index(Request $request)
    {
        ///$user = Auth::user();
        //$limit = $request->get('limit', 15);
        //$annonces = Annonce::where('user_id', $user->id)->paginate($limit);
        $annonces = Annonce::get();
        return view('admin.authentication.layouts.pages.ads.show', compact('annonces'));
    }

    public function create()
    {
        return view('admin.authentication.layouts.pages.ads.create');
    }

    public function edit(Annonce $annonce)
    {

        return view('admin.authentication.layouts.pages.ads.edit', compact('annonce'));
    }

    public function boost(Annonce $annonce)
    {
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'town_id' => 'required|exists:towns,id',
                'user_id' => 'required|exists:users,id',
                'category_id' => 'required|exists:categories,id',
                'image' => 'required'
            ]
        );

        $annonce = Annonce::create($request->only('name', 'price', 'description', 'user_id', 'town_id', 'category_id', 'image',));
        //dd($annonce);

        return Redirect::route('admin.ads.index');
    }

    public function update(Request $request, Annonce $annonce)
    {
        //if ($annonce->user_id != auth()->id()) abort(403);
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'town_id' => 'required|exists:towns,id',
                'user_id' => 'required|exists:users,id',
                'category_id' => 'required|exists:categories,id',
            ]
        );


        $annonce->update($request->except('level', 'is_blocked'));

        return Redirect::route('admin.ads.index');
    }

    public function view(Annonce $annonce)
    {
        if ($annonce->user_id != auth()->id()) abort(403);
        $annonce->load('payment', 'signals', 'comments', 'boosts', 'discussions', 'category', 'town');
        return response()->compact($annonce);
    }

    public function delete(Annonce $annonce)
    {
        //if ($annonce->user_id != auth()->id()) abort(403);
        $annonce->delete();
        return Redirect::route('admin.ads.index');
    }

    public function sortByName(Request $request)
    {
        $name = $request->input('name');
        $annonces = Annonce::where('name', 'like', "%$name%")->get();
        return response()->json($annonces);
    }
}