@extends('auth.default-auth')

@section('auth')

    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="POST" name="register">
                        <div class="account-form form-style">
                            <p>User Name or Email Address *</p>
                            <input type="email">
                            <p>Password *</p>
                            <input type="Password">
                            <p>Confirm Password *</p>
                            <input type="Password">
                            <div class="socials">
                                <div class="left">
                                    @include("includes.google-auth")
                                </div>
                                <div class="right">
                                    @include("includes.facebook-auth")
                                </div>
                            </div>
                            <button>Register</button>
                            <div class="text-center">
                                <a href="{{ route('auth.login') }}">Or Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
