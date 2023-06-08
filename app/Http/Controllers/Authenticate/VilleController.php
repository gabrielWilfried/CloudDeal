<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VilleController extends Controller
{
    public function store(Request $request)
    {
        $validateTown = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255'
            ]
        );

        if ($validateTown->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateTown->errors()
            ], 401);
        }

        $town = Town::create($request->all());

        return response()->json($town, 201);
    }

    public function update(Request $request, Town $town)
    {
        $validateTown = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255'
            ]
        );

        if ($validateTown->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateTown->errors()
            ], 401);
        }

        $town->update($request->all());

        return response()->json($town);
    }

    public function delete(Town $town)
    {
        $town->delete();
        return response()->noContent();
    }
}
