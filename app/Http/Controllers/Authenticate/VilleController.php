<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Town;
use Illuminate\Http\Request;

class VilleController extends Controller
{

    public function index(Request $request)
    {
        if (!auth()->user()->is_admin) {
            return back();
        }
        $towns = Town::all();
        $regions = Region::all();
        return view('admin.authentication.layouts.pages.town.show', compact('towns', 'regions'));
    }

    public function store(Request $request)
    {

        if (!auth()->user()->is_admin) {
            return back();
        }
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $town = Town::create($request->all());
        return redirect()->back()->with('message', 'Town created successfully');
    }

    public function delete(Town $town)
    {
        if (!auth()->user()->is_admin) {
            return back();
        }
        $town->delete();

        return redirect()->route('admin.town.index')->with('success', 'La ville a été supprimée avec succès.');
    }
}
