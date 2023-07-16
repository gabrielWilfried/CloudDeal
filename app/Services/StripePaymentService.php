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
    protected Payment $payment;

    public function __construct(Payment $payment)
    {
        $this->stripeSecretKey = env('STRIPE_SECRET_KEY');
        Stripe::setApiKey($this->stripeSecretKey);
        $this->stripe = new StripeClient($this->stripeSecretKey);
        $this->payment = $payment;
    }



    public function generatePaymentUrl()
    {
        $checkoutSession = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency'     => 'xaf',
                        'product_data' => [
                            'name' => $this->payment->target->name ?? $this->payment->target->annonce->name,
                        ],
                        'unit_amount' => $this->payment->amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('admin.stripe.checkout.success', $this->payment->uuid) . '?session_id={CHECKOUT_SESSION_ID}',

            'cancel_url'  => route('admin.stripe.checkout.cancel', $this->payment->uuid) . '?session_id={CHECKOUT_SESSION_ID}',
        ]);

        return $checkoutSession;
    }
}
