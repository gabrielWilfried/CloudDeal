<?php

namespace App\Services;

use Stripe\Charge;
use Stripe\Stripe;


class StripePaymentService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.stripe.secret');
        Stripe::setApiKey($this->apiKey);
    }

    public function createCharge($amount, $currency, $source, $description)
    {
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => $currency,
                'source' => $source,
                'description' => $description,
            ]);

            return $charge; //https://buy.stripe.com/test_bIY9Dl5ttaaW5m83cc

    }
}
