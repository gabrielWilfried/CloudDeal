@extends('layouts.default')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" >
@endsection


@section('content')
    @include('includes.breadcumb')
    @yield("auth")
@endsection

@section("script")
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('assets/js/validation.js')}}"></script>
@endsection
