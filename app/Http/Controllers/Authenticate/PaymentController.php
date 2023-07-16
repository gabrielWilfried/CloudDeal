<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Payment;
use App\Models\Contact;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->is_admin) {
            $payments = Payment::all();
        } else {
            $user = auth()->user();
            $payments = $user->payments;
        }

        $montantTotals = 0;
        foreach ($payments as $payment) {
            if ($payment->status == 'APPROVED') {
                $montantTotals += $payment->amount;
            }
        }
        $montantTotals = toMoney($montantTotals);
        return view('admin.authentication.layouts.pages.payment', compact('payments', 'montantTotals'));
    }

    public function approvePayment(Payment $payment)
    {
        $payment->status = 'APPROVED';
        $payment->save();

        return redirect()->back();
    }

    public function cancelPayment(Payment $payment)
    {
        $payment->status = 'CANCELLED';
        $payment->save();

        return redirect()->back();
    }
}
