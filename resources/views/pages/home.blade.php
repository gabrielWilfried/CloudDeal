@extends('layouts.default')
@section('content')
    <div class="slider-area">
        @include('pages.landing-page.slider')
    </div>

    <div class="featured-area featured-area2">
        @include('pages.landing-page.features')
    </div>

    <div class="count-down-area count-down-area-sub">
        @include('pages.landing-page.countdown')
    </div>

    <div class="product-area product-area-2">
        @include('pages.landing-page.products')
    </div>

    <div class="banner-area bg-img-8">
        @include('pages.landing-page.banner')
    </div>

    <div class="product-area">
        @include('pages.landing-page.published-products')
    </div>
    <div class="testmonial-area testmonial-area2 bg-img-2 black-opacity">
        @include('pages.landing-page.testimonial')
    </div>

    <section class="social-newsletter-section">
        @include('pages.landing-page.socials')
    </section>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1">
        @include('pages.landing-page.modal')
    </div>
@endsection
