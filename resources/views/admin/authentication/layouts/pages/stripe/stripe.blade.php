@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')
    <div class="tab-content tabcontent-border">
        <div class="tab-pane active" id="debit-card" role="tabpanel">
            <div class="p-30">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('stripe.store') }}" method="POST" id="card-form">
                            @csrf
                            <div class="form-group">
                                <label for="card">CARD NUMBER</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                    <input type="text" class="form-control" id="card"
                                        placeholder="Card Number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group">
                                        <label for="card">EXPIRATION DATE</label>
                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY"
                                            required="" id="card">
                                    </div>
                                </div>
                                <div class="col-5 pull-right">
                                    <div class="form-group">
                                        <label for="card">CV CODE</label>
                                        <input type="text" class="form-control" name="CVC" placeholder="CVC"
                                            required="" id="card">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="card-name">NAME OF CARD</label>
                                        <input type="text" class="form-control" name="nameCard"
                                            placeholder="NAME AND SURNAME" id="card-name">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden">
                            <button type="submit"class="btn btn-success btn-rounded">Make Payment</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <h3 class="box-title mt-10">General Info</h3>
                        <h2><i class="fa fa-cc-visa text-info"></i>
                            <i class="fa fa-cc-mastercard text-danger"></i>
                            <i class="fa fa-cc-discover text-success"></i>
                            <i class="fa fa-cc-amex text-warning"></i>
                        </h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="paypal" role="tabpanel">
            <div class="p-30">
                You can pay your money through paypal, for more info <a href="#">click here</a><br><br>
                <button class="btn btn-info btn-outline"><i class="fa fa-cc-paypal"></i> Pay with Paypal</button>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        let stripe = Stripe('{{ env("STRIPE_KEY") }}')
        const elements = stripe.elements()
        const cardElement = elements.create('card', {
            style: {
                base: {
                    fontSize: '16px'
                }
            }
        })
        const cardForm = document.getElementById('card-form')
        const cardName = document.getElementById('card-name')
        cardElement.mount('#card')
        cardForm.addEventListener('submit', async (e) => {
            e.preventDefault()
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: cardName.value
                }
            })
            if (error) {
                console.log(error)
            } else {
                let input = document.createElement('input')
                input.setAttribute('type', 'hidden')
                input.setAttribute('name', 'payment_method')
                input.setAttribute('value', paymentMethod.id)
                cardForm.appendChild(input)
                cardForm.submit()
            }
        })
    </script>
@endpush
