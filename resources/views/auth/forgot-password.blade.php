@extends('layouts.default')

@section('content')
    @include('includes.breadcumb')

    <div class="account-area ptb-100">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="get" name='forgot-password'>
                        <div class="account-form form-style">
                            <p>Email Address *</p>
                            <input name="email" type="email">
                            <label class="form-error"></label>
                            <button>SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
@endsection
