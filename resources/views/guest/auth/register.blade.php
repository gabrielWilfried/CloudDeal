@extends('guest.auth.default-auth')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
@endsection

@section('auth')
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="POST" name="register" action="{{ route('auth.register') }}">
                        @csrf
                        <div class="account-form form-style">
                            <p>Name *</p>
                            <input type="text" name="name">
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
                            <input type="tel" id="phone" name="phone">
                            <P>Address </P>
                            <input type="text" name="address">
                            <P>Photo </P>
                            <input type="file" name="image" accept="image/*">
                            <div class="socials">
                                <div class="left">
                                    @include('guest.includes.google-auth')
                                </div>
                                <div class="right">
                                    @include('guest.includes.facebook-auth')
                                </div>
                            </div>
                            <button type="submit">Register</button>
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
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input);
    </script>
@endsection
