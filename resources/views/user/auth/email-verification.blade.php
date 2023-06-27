@extends('user.auth.default-auth')

@section('auth')
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="POST" name="email-verification">
                        <div class="account-form form-style">
                            <p>Enter verification code*</p>
                            <small>A verification code has been sent to your mail box. Enter the code below</small>
                            <input name="code" type="text">
                            <button>Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

