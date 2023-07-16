@section('style')
    <link rel="stylesheet" href="{{ asset('admin-assets/custom/style_modal.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
@endsection

<div class="modal-invisible " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="modal-content">
            <div class="modal-header">

                <button type="button" id="close-modal-login"
                    class="close d-flex align-items-center justify-content-center" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4 py-5 p-md-5">
                <h3 class="text-center mb-3" id="h3">Create Your Account</h3>
                <ul class="ftco-footer-social p-0 text-center">
                    <li class="ftco-animate">
                        <a href="{{ route('auth.google') }}"data-toggle="tooltip" data-placement="top" title="Google">Se
                            connecter avec Google<i class="fa fa-google"></i>
                        </a>
                    </li>

                </ul>

                <br>
                <form name="login" action="{{ route('auth.login.auth') }}" method="POST" class="signup-form">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email">Email Address*</label>
                        <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password*</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" id="signup" class="form-control btn btn-primary rounded submit px-3">Sign
                            Up</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-100 text-center">
                            <a href="{{ route('auth.register') }}">Or Creat an Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    #h3 {
    font-size: 16px;
}
#loginModal {
    font-size: 12px;
}
#signup  {
    color: #fff;
    background-color: #ef4836;
    border-color: #ef4836;
}
#modal-content .close {
    position: absolute;
    right: -35px;
    top: -36px;
    width: 50px;
    height: 50px;
    background: #ef4836;
    text-align: center;
    font-size: 24px;
    border: none;
    color: #fff;
    opacity: 1;
</style>
