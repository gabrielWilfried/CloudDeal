@extends('user.layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" >
@endsection


@section('content')
    @include('user.includes.breadcumb')
    @yield("auth")
@endsection

@section("script")
    <script src="{{asset('assets/custom/js/validation.js')}}"></script>
@endsection
