@extends('layouts.default')

@section('content')

    @include('includes.breadcumb')

    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="account-form form-style">
                        <p>User Name or Email Address *</p>
                        <input type="email">
                        <button>SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
