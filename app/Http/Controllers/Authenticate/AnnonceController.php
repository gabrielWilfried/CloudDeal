<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->get('limit', 3);
        $annonces = Annonce::paginate($limit);
        return response()->json($annonces, 200);
    }

    public function store()
    {
    }

    public function update()
    {
    }

    public function view()
    {
    }

    public function delete()
    {
    }
}
