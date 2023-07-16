<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Payment;
use App\Models\Contact;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {

        $payments = Payment::with('annonce.user', 'annonce.boosts')->get();




        $montantTotals = 0;

        foreach ($payments as $payment) {
            if ($payment->status == 'APPROVED') {
                $montantTotals += $payment->amount;
            }
        }
        $montantTotals = toMoney($montantTotals);
        return view('admin.authentication.layouts.pages.payment', compact('payments', 'montantTotals'));
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
