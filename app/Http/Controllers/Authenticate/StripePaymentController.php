<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Stripe;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class StripePaymentController  extends Controller
{
    public function index(): View
    {
        return view('stripe');
    }



    public function store(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => 10 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from CloudDeal.com." //itsolutionstuff
        ]);

        return back()->with('success', 'Payment successful!');
    }

}
