<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {

        $annonces = Annonce::with('user', 'payment', 'boosts')->get();
        $montantTotals = 0;

        foreach ($annonces as $annonce) {
            if ($annonce->payment) {

                $montantTotals  += $annonce->payment->amount;
            }
        }
        $montantTotals = toMoney($montantTotals);
        return view('admin.authentication.layouts.pages.payment', compact('annonces', 'montantTotals'));
    }
}