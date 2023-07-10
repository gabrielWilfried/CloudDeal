<?php

namespace App\Http\Controllers\Authenticate;

use Exception;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use App\Http\Controllers\Controller;



class StripePaymentController  extends Controller
{
    public function index()
    {
        return view('admin.authentication.layouts.pages.stripe.stripe');
    }
//create un service to manage the payment by stripe
//stripe must generate a link for payment
    public function store(Request $request)
    {
        try {
            $stripe = new StripeClient(env('STRIPE_SECRET'));

            $stripe->paymentIntents->create([
                'amount' => 99 * 100,
                'currency' => 'usd',
                'payment_method' => $request->payment_method,//sscanf(),
                'description' => 'Demo payment with stripe',
                'confirm' => true,
                'receipt_email' => $request->email
            ]);
        } catch (CardException $th) {
            throw new Exception("There was a problem processing your payment", 1);
        }

        return back()->withSuccess('Payment done.');
    }

}
