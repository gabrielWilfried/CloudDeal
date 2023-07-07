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
      
        $annonce = Annonce::findOrFail($id);

      

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
            $annonce->is_blocked = true;
            $annonce->save();

           // return back()->with('success','annonce bloque.');

           return redirect()->route('home')->with('success', 'annonce bloque.');
        
        }

        // Répondre avec un message de succès
        return back()->with('successSignal', 'L\'annonce a été signalée avec succès.');
    }

    

}
