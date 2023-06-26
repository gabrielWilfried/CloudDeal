@extends('auth.default-auth')

@section('auth')

    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="POST" name="register">
                        <div class="account-form form-style">
                            <p>Name *</p>
                            <input  type="text" name="name">
                            <P>Email Address * </P>
                            <input type="email" name="email">
                            <P>Sex </P>
                            <div class="row">
                                <div class="col-lg-2">
                                    <input id="male" name="sex" type="radio">
                                    <label id="save-password" for="male">Male </label>
                                </div>
                                <div class="col-lg-4">
                                    <input id="female" name="sex" type="radio">
                                    <label id="save-password" for="female">Female </label>
                                </div>
                            </div>
                            <p>Password *</p>
                            <input id="password" type="password" name="password">
                            <p>Confirm Password *</p>
                            <input type="password" name="confirm">
                            <P>Pseudo *</P>
                            <input type="text" name="pseudo">
                            <P>Phone </P>
                            <input type="tel" name="phone">
                            <P>Address </P>
                            <input type="text" name="address">
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
