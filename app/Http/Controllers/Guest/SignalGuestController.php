<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Http\Controllers\Signal;
use Illuminate\Http\Request;

class SignalGuestController extends Controller
{



    public function signaleAnnonce(Request $request, $id)
    {
        // Récupérer l'signal spécifié
        $annonce = Annonce::findOrFail($id);

        // Créer un nouveau signalement
        $signal = new Signal();
        $signal->annonce_id = $annonce->id;
        $signal->reason = $request->input('reason');
        $signal->count = $annonce->signals()->count();
        $signal->count += 1;
        $signal->save();

        $signalMax = 3;
        $signalCount = $signal->count;
        if ($signalCount >= $signalMax) {
            $annonce->update(['is_blocked' => true]);

            return response()->json(['message' =>'Annonce Bloquée']);

        }

        // Répondre avec un message de succès
        return response()->json(['message' => 'Annonce signalé avec succès']);
    }

}
