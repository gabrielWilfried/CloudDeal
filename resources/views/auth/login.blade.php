@extends('layouts.default')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" >
@endsection

@section('content')
    @include('includes.breadcumb')

    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="GET" name="login" action="">
                        <div class="account-form form-style">
                            <p>Email Address *</p>
                            <input type="email" name="email">
                            <label  class="form-error"></label>
                            <p>Password *</p>
                            <input type="password" name="password">
                            <label class="form-error"></label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input id="password" type="checkbox">
                                    <label id="save-password" for="password">Save Password</label>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <a href="{{ route('auth.forgot-password') }}">Forget Your Password?</a>
                                </div>
                            </div>
                            <div class="socials">
                                <div class="left">
                                    @include('includes.google-auth')
                                </div>
                                <div class="right">
                                    @include('includes.facebook-auth')
                                </div>
                            </div>
                            <button type="submit">SIGN IN</button>
                            <div class="text-center">
                                <a href="{{ route('auth.register') }}">Or Creat an Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section("script")
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('assets/js/validation.js')}}"></script>
@endsection
