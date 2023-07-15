<?php

namespace App\Http\Controllers\Authenticate;

use App\Models\User;
use App\Models\Signal;
use App\Models\Annonce;
use App\Models\Comment;
use App\Models\Boost;
use App\Models\Enums\PathFileEnum;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use App\Services\StripePaymentService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        //dd($request->all());
        $request->validate(
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

        $datas = $request->only('name', 'price', 'description', 'town_id', 'category_id');
        $datas['user_id'] = Auth::user()->id;
        $datas['image'] = FileUploadService::uploadPath($request->file('image'), PathFileEnum::ANNONCE_PATH);
        $annonce = Annonce::create($datas);
        if ($request->hasFile('images')) {
            FileUploadService::uploadMultipleFiles($request->file('images'), $annonce, PathFileEnum::ANNONCE_PATH);
        }

        return redirect()->route('admin.ads.index')->with('message', 'Ad created successfully');
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

    public function checkout(Annonce $annonce, Payment $price){
        $stripePaymentService = new StripePaymentService();
        return $stripePaymentService->generatePaymentUrl($price, $annonce);

    }

    public function block(Request $request, Annonce $annonce)
    {
        $annonce->is_blocked = !($annonce->is_blocked);
        $annonce->save();
        return redirect()->back();
    }
}
