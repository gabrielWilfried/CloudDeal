<?php

namespace App\Services;

use App\Models\Annonce;
use App\Models\Payment;
use Stripe\Stripe;
use Stripe\StripeClient;




class StripePaymentService
{
    protected $stripeSecretKey;
    private StripeClient $stripe;

    public function __construct()
    {
        $this->stripeSecretKey = env('STRIPE_SECRET_KEY');
        Stripe::setApiKey($this->stripeSecretKey);
        $this->stripe = new StripeClient($this->stripeSecretKey);
    }



    public function generatePaymentUrl(Payment $amount, Annonce $ad)
    {
        $checkoutSession = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency'     => 'xaf',
                        'product_data' => [
                            'name' => $ad->name,
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('admin.ads.detail', ['annonce' => $ad], [], true) . '?session_id={CHECKOUT_SESSION_ID}',

            'cancel_url'  => route('admin.ads.detail', ['annonce' => $ad], [], true) . '?session_id={CHECKOUT_SESSION_ID}',
        ]);

        // $payment = new Payment();
        // $payment->status = 'PENDING';
        // $payment->uuid = $checkoutSession->id;

        return redirect($checkoutSession->url,  303);
    }


}
