@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')
    <div class="tab-content tabcontent-border">
        <div class="tab-pane active" id="debit-card" role="tabpanel">
            <div class="p-30">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CARD NUMBER</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                    <input type="text" class="form-control" id="exampleInputuname"
                                        placeholder="Card Number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group">
                                        <label>EXPIRATION DATE</label>
                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-5 pull-right">
                                    <div class="form-group">
                                        <label>CV CODE</label>
                                        <input type="text" class="form-control" name="CVC" placeholder="CVC"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>NAME OF CARD</label>
                                        <input type="text" class="form-control" name="nameCard"
                                            placeholder="NAME AND SURNAME">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-rounded">Make Payment</button>
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
