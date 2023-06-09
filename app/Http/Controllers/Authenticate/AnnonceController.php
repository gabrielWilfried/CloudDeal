<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $limit = $request->get('limit', 9);
        $annonces =$user-> annonces()->paginate($limit);
        return response()->json($annonces);
    }

    public function store(Request $request)
    {
        $validateAnnonce = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required|string',
                'level' => 'required',
                'is_blocked' => 'required',
                'town_id' => 'required|exists:town,id',
                'user_id' => 'required|exists:user,id',
                'category_id' => 'required|exists:category,id',
            ]
        );

        if ($validateAnnonce->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateAnnonce->errors()
            ], 401);
        }

        $annonce = Annonce::create($request->all());

        return response()->json($annonce, 201);
    }

    public function update(Request $request, Annonce $annonce)
    {

            $validateAnnonce = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255',
                    'price' => 'required|numeric|min:0',
                    'description' => 'required|string',
                    'level' => 'required',
                    'is_blocked' => 'required',
                    'town_id' => 'required|exists:town,id',
                    'user_id' => 'required|exists:user,id',
                    'category_id' => 'required|exists:category,id',
                ]
            );

            if ($validateAnnonce->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateAnnonce->errors()
                ], 401);
            }

            $annonce->update($request->all());

            return response()->json($annonce);

    }

    public function view(Request $request)
    {
        $user = $request -> user();
        $annonce = $user -> annonces() -> find($id);
        if(!$annonce){
            return response()->json(abort(404));
        }
        return response()->json($annonce);
    }

    public function delete(Annonce $annonce)
    {
       $annonce->delete();
       return response()->noContent();
    }
}
