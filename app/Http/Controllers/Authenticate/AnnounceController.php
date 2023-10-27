<?php

namespace App\Http\Controllers\Authenticate;

use App\Models\Announce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AnnounceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $announces = $user->announces;
        return response()->json($announces, 403);
    }

    public function store(Request $request)
    {
        $validateAd = Validator::make(
            $request->all(), 
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'town_id' => 'required|exists:towns,id',
                'category_id' => 'required|exists:categories,id',
                'image' => 'required|file',
                'images' => 'nullable',
            ]
        );

        if ($validateAd->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateAd->errors()
            ], 401);
        }

        $announce = Announce::create($request->all());
        return response()->json($announce, 201);
    }

    public function update(Request $request, Announce $announce)
    {
        $validateAd = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required',
                'town_id' => 'required|exists:towns,id',
                'category_id' => 'required|exists:categories,id',
                'image' => 'required|file',
                'images' => 'nullable',
            ]
        );

        if ($validateAd->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateAd->errors()
            ], 401);
        }

        $announce->update($request->all());

        return response()->json($announce);
    }

    public function delete(Announce $announce)
    {
        $announce->delete();
        return response()->noContent();
    }
}
