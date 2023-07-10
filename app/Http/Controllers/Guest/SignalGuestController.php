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

    $signal = new Signal();
    $signal->annonce_id = $annonce->id;
    $signal->reasons = $request->input('reason');
    $signal->count = $annonce->signals()->count();
    $signal->count += 1;
    $signal->save();

    $signalMax = 3;
    $signalCount = $signal->count;
    if ($signalCount >= $signalMax) {
        $annonce->is_blocked = true;
        $annonce->save();

       return response()->json(['message' => 'annonce bloque'], 403);
    }

    return response()->json(['message' => 'L\'annonce a été signalée avec succès']);
}

}
