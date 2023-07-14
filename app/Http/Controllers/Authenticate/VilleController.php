<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VilleController extends Controller
{

    public function index(Request $request)
    {

        $towns = Town::all();
        $regions = Region::all();
        return view('admin.authentication.layouts.pages.town.show', compact('towns', 'regions'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $town = Town::create($request->all());
        return redirect()->back()->with('message', 'Town created successfully');
    }

    public function delete(Town $town)
    {
        $town->delete();

        return redirect()->route('admin.town.index')->with('success', 'La ville a été supprimée avec succès.');
    }
}
