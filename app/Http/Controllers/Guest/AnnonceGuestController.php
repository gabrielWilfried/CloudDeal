<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceGuestController extends Controller
{
    // Cette methode renvois toutes les signal qui ne
    public function index(Request $request)
    {

         $limit = $request->get('limit', 3);

         $annonces = Annonce::where('is_published', true)->paginate($limit);
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

    public function signalAnnonce(Request $request, $id)
    {
        // Récupérer l'signal spécifié
        $annonce = Annonce::findOrFail($id);

        // Créer un nouveau signalement
        $signal = new Annonce();
        $signal->annonce_id = $annonce->id;
        $signal->user_id = $request->user()->id;
        $signal->reason = $request->input('reason');
        $signal->save();

        // Répondre avec un message de succès
        return response()->json(['message' => 'Annonce signalé avec succès']);
    }

    // Cette methode compte le nombre de signalement d'un produit et bloque l'signal quand lorsque le seuil est atteint

    public function handleSignals(Request $request, $id)
    {
        // Récupérer l'signal spécifié
        $annonce = Annonce::findOrFail($id);

        // Compter le nombre de signalements pour l'signal
        $signalCount = $signal->signals()->count();

        // Vérifier si le nombre de signalements dépasse le seuil
        $signalThreshold = 15; // Seuil de signalements
        if ($signalCount >= $signalThreshold) {
            // Bloquer la publication de l'signal
            $annonce->is_published = false;
            $annonce->save();

            // Répondre avec un message de succès
            return response()->json(['message' => 'Annonce bloquée avec succès']);
        }

        // Répondre avec le nombre de signalements actuel
        return response()->json(['signalCount' => $signalCount]);
    }

    public function delete()
    {
    }
}
