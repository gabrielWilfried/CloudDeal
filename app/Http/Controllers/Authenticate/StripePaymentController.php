<?php

namespace App\Http\Controllers\Authenticate;


use Illuminate\Http\Request;
use App\Services\StripePaymentService;
use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Payment;

class StripePaymentController  extends Controller
{
    public function success($uuid)
    {
        $payment = Payment::where('uuid', $uuid)->firstOrFail();
        $payment->status = 'APPROVED';
        $payment->save();
        if (isset($payment->target->name)) {
            $annonce =  Annonce::find($payment->target->id);
        } else {
            $annonce = Annonce::find($payment->target->annonce->id);
            $annonce->level += $payment->target->score;
            $annonce->save();
        }

        return to_route('admin.ads.detail', $annonce->id);
    }

    public function cancel($uuid)
    {
        $payment = Payment::where('uuid', $uuid)->firstOrFail();
        $payment->status = 'CANCELLED';
        $payment->save();
        $annonce_id = isset($payment->target->name) ? $payment->target->id : $payment->target->annonce->id;
        return to_route('admin.ads.detail', $annonce_id);
    }
}
