<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Contact;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {

        $annonces = Annonce::with('user', 'payment', 'boosts')->get();
        $montantTotals = 0;

        foreach ($annonces as $annonce) {
            if ($annonce->payment && $annonce->payment->status == 'APPROVED') {

                $montantTotals  += $annonce->payment->amount;
            }
        }
        $montantTotals = toMoney($montantTotals);
        return view('admin.authentication.layouts.pages.payment', compact('annonces', 'montantTotals'));
    }

    public function approvePayment(Annonce $annonce)
    {

        // Mettre à jour le statut du paiement à APPROVED
        $annonce->payment->status = 'APPROVED';
        $annonce->payment->save();

        return redirect()->back();
    }

    public function cancelPayment(Annonce $annonce)
    {

        // Mettre à jour le statut du paiement à CANCELLED
        $annonce->payment->status = 'CANCELLED';
        $annonce->payment->save();

        return redirect()->back();
    }
}
