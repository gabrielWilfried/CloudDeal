<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        
        return view('pages.home');
    }

    public function store(Request $request)
    {
        $validateAnnonce = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'town_id' => 'required|exists:towns,id',
                'user_id' => 'required|exists:users,id',
                'category_id' => 'required|exists:categories,id',
            ]
        );

        if ($validateAnnonce->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateAnnonce->errors()
            ], 400);
        }

        $annonce = Annonce::create($request->only('name', 'price', 'description', 'town_id', 'user_id', 'category_id'));

        return response()->json($annonce, 201);
    }

    public function update(Request $request, Annonce $annonce)
    {
        if ($annonce->user_id != auth()->id()) abort(403);
        $validateAnnonce = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'town_id' => 'required|exists:towns,id',
                'user_id' => 'required|exists:users,id',
                'category_id' => 'required|exists:categories,id',
            ]
        );

        if ($validateAnnonce->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateAnnonce->errors()
            ], 400);
        }

        $annonce->update($request->except('level', 'is_blocked'));

        return response()->json($annonce);
    }

    public function view(Annonce $annonce)
    {
        if ($annonce->user_id != auth()->id()) abort(403);
        $annonce->load('payment', 'signals', 'comments', 'boosts', 'discussions', 'category', 'town');
        return response()->json($annonce);
    }

    public function delete(Annonce $annonce)
    {
        if ($annonce->user_id != auth()->id()) abort(403);
        $annonce->delete();
        return response()->noContent();
    }
}
