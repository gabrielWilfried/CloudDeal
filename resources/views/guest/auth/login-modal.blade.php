
@section('style')
<link rel="stylesheet" href="{{ asset('admin-assets/custom/style_modal.css') }}">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
@endsection

    <div class="modal-invisible " id="loginModal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
					<button type="button" id="close-modal-login" class="close d-flex align-items-center justify-content-center"
						data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="ion-ios-close"></span>
					</button>
				</div>
				<div class="modal-body p-4 py-5 p-md-5">
					<h3 class="text-center mb-3">Create Your Account</h3>
					<ul class="ftco-footer-social p-0 text-center">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                            title="Google"><i class="fa fa-google"></i></a></li>
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
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
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
