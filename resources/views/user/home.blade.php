@extends('user.layouts.layout')

@section('content')
    <div class="slider-area">
        @include('user.includes.landing-page.slider')
    </div>

    <div class="featured-area featured-area2">
        @include('user.includes.landing-page.features')
    </div>

    <div class="product-area product-area-2">
        @include('user.includes.landing-page.products')
    </div>

    <div class="banner-area bg-img-8">
        @include('user.includes.landing-page.banner')
    </div>

    <div class="product-area" id="products">
        @include('user.includes.landing-page.published-products')
    </div>

@endsection
