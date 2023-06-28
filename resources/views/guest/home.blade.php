@extends('guest.layouts.layout')

@section('content')
    <div class="slider-area">
        @include('guest.includes.landing-page.slider')
    </div>

    <div class="featured-area featured-area2">
        @include('guest.includes.landing-page.categories')
    </div>

    <div class="product-area product-area-2">
        @include('guest.includes.landing-page.bestseller')
    </div>

    <div class="banner-area bg-img-8">
        @include('user.includes.landing-page.banner')
    </div>

    <div class="product-area" id="products">
        @include('guest.includes.landing-page.published-products')
    </div>

@endsection
