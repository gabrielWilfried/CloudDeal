@extends('guest.auth.default-auth')

@section('auth')
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="POST" name="login" action="{{route('auth.login.auth')}}">
                        @csrf
                        <div class="account-form form-style">
                            <p>Email Address *</p>
                            <input type="email" name="email">
                            <p>Password *</p>
                            <input type="password" name="password">
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
                                    @include('guest.includes.google-auth')
                                </div>
                                <div class="right">
                                    @include('guest.includes.facebook-auth')
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


