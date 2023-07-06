<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VilleController extends Controller
{

    public function index(Request $request)
    {   

        $towns = Town::all();
        return view('admin.authentication.layouts.pages.town.show', compact('towns'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
            
        $town = Town::create($request->all());

        return response()->json($town, 201);
    }

    public function update(Request $request, Town $town)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255'
            ]
        );
            

        $town->update($request->all());

        return response()->json($town);
    }

    public function delete(Town $town)
    {
        $town->delete();
        return response()->noContent();
    }
}
