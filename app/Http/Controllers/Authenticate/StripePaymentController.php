<?php

namespace App\Http\Controllers\Authenticate;


use Illuminate\Http\Request;
use App\Services\StripePaymentService;
use App\Http\Controllers\Controller;



class StripePaymentController  extends Controller
{
    protected $stripePaymentService;

    public function __construct(StripePaymentService $stripePaymentService)
    {
        $this->stripePaymentService = $stripePaymentService;
    }

    public function index()
    {
        return view('admin.authentication.layouts.pages.stripe.stripe');
    }

    public function store()
    {

    }

}
