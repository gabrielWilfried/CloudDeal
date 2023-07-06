<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Comment;
use App\Models\Signal;
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

    public function paginatedAds(Request $request)
    {
        ///$user = Auth::user();
        //$limit = $request->get('limit', 15);
        //$annonces = Annonce::where('user_id', $user->id)->paginate($limit);
        $annonces = Annonce::where('is_blocked', false)->paginate(7);
        return response()->json(['annonces' => $annonces]);
    }

    public function create(){
        return view('admin.authentication.layouts.pages.ads.create');
    }

    public function edit(Annonce $annonce){

        return view('admin.authentication.layouts.pages.ads.edit', compact('annonce'));
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

        $annonce = Annonce::create($request->only('name', 'price', 'description', 'user_id', 'town_id', 'category_id', 'image', ));

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

        dd($request);
        $annonce->update($request->except('level', 'is_blocked'));

        return response()->json(['message', 'Updated successfully']);
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
        return response()->json(['message', 'Deleted successfully']);
    }

    public function detail($annonce){
        $ad = Annonce::find($annonce);
        $comments = Comment::where('annonce_id', '=', $annonce)->get();
        $signals = Signal::where('annonce_id', '=', $annonce)->get();
        return view('admin.authentication.layouts.pages.ads.ad-detail', compact('ad', 'comments', 'signals'));
    }

    public function sortByName(Request $request)
    {
        $name = $request->input('name');
        $annonces = Annonce::where('name' , 'like', "%$name%")->get();
        return response()->json($annonces);
    }
    public function block(Request $request, Annonce $annonce){
        $annonce->is_blocked = !($annonce->is_blocked);
        $annonce->save();
        return redirect()->back();
    }
}
