@extends("auth.default-auth")

@section('auth')
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                   <form method="POST" name="reset-password">
                    <div class="account-form form-style">
                        <p>New Password *</p>
                        <input name="password" id="password" type="Password">
                        <p>Confirm Password *</p>
                        <input name="confirm" type="Password">
                        <button type="submit">SUBMIT</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection

