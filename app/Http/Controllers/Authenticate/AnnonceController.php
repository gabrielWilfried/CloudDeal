<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Comment;
use App\Models\Signal;
use App\Models\Boost;
use App\Models\Enums\PathFileEnum;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $annonces = Annonce::where('user_id', $user->id)->get();
        $annonces = Annonce::get();
        $boosted_ads_id = Boost::pluck('annonce_id')->unique();
        return view('admin.authentication.layouts.pages.ads.show', compact('annonces', 'boosted_ads_id'));
    }

    public function create()
    {
        return view('admin.authentication.layouts.pages.ads.create');
    }

    public function edit(Annonce $annonce)
    {

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
                'user_id' => Auth::user()->id,
                'category_id' => 'required|exists:categories,id',
                'image' => 'required|file',
                'images' => 'nullable',
            ]
        );

        $datas = $request->only('name', 'price', 'description', 'user_id', 'town_id', 'category_id');

        $datas['image'] = FileUploadService::uploadPath($request->file('image'), PathFileEnum::ANNONCE_PATH);
        $annonce = Annonce::create($datas);
        if ($request->hasFile('images')) {
            FileUploadService::uploadMultipleFiles($request->files('images'), $annonce, PathFileEnum::ANNONCE_PATH);
        }

        return response()->json(['message' => 'Created Successfully']);
    }

    public function update(Request $request, Annonce $annonce)
    {
        if ($annonce->user_id != auth()->id()) abort(403);
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

        return response()->json(['message' => 'Updated successfully']);
    }

    public function verify(Annonce $annonce)
    {
        $annonce->is_verified = true;
        $annonce->save();
        return redirect()->route('admin.ads.index');
    }

    public function delete(Annonce $annonce)
    {
        if ($annonce->user_id != auth()->id()) abort(403);
        $annonce->delete();
        return response()->json(['message', 'Deleted successfully']);
    }

    public function detail($annonce)
    {
        $boost = Boost::where('annonce_id', $annonce)->latest()->first();
        $ad = Annonce::find($annonce);
        $comments = Comment::where('annonce_id', '=', $annonce)->get();
        $signals = Signal::where('annonce_id', '=', $annonce)->get();
        return view('admin.authentication.layouts.pages.ads.ad-detail', compact('ad', 'comments', 'signals', 'boost'));
    }

    public function block(Request $request, Annonce $annonce)
    {
        $annonce->is_blocked = !($annonce->is_blocked);
        $annonce->save();
        return redirect()->back();
    }
}
