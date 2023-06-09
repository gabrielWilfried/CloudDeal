<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceGuestController extends Controller
{
    public function listAnnonces(Request $request)
    {
        $limit = $request->get('limit', 15);
        $annonces = Annonce::where('is_blocked', false)->paginate($limit);
        return response()->json($annonces);
    }

    public function detailsAnnonce(Annonce  $annonce)
    {
        $annonce->load('comments', 'category', 'town');
        return response()->json($annonce);
    }
}
