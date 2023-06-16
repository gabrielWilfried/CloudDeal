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
                        <p>Password *</p>
                        <input type="Password">
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="password" type="checkbox">
                                <label for="password">Save Password</label>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a href="{{ route('auth.forgot-password') }}">Forget Your Password?</a>
                            </div>
                        </div>
                        <button>SIGN IN</button>
                        <div class="text-center">
                            <a href="{{ route('auth.register') }}">Or Creat an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
