<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Signal;
use Illuminate\Http\Request;

class SignalGuestController extends Controller
{



    public function signaleAnnonce(Request $request, $id)
    {
        // Récupérer l'signal spécifié
        $annonce = Annonce::findOrFail($id);

        // Créer un nouveau signalement

        // gerer l'affichage avec les models : c'est une classe bootstrapp
        $signal = new Signal();
        $signal->annonce_id = $annonce->id;
        $signal->reasons = $request->input('raison');
        $signal->count = $annonce->signals()->count();
        $signal->count += 1;
        $signal->save();

        $signalMax = 3;
        $signalCount = $signal->count;
        if ($signalCount >= $signalMax) {
            $annonce->update(['is_blocked' => true]);

            return back()->with('success','annonce bloque.');
        }

        // Répondre avec un message de succès
        return back()->with('success', 'L\'annonce a été signalée avec succès.');
    }

    

}
