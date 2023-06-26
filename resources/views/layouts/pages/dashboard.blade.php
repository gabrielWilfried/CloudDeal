@extends('layouts.default')

@section('content')

    @include("includes.breadcumb")

    <div class="product-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-10">
                    <div class="product-menu">
                        <ul class="nav">
                            <li>
                                <a class="active" data-toggle="tab" href="#all">All product</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#chair">Honey</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#table">Olive</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#bed">Nut</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#decorative">Coconut</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-2">
                    <div class="filter-menu text-right">
                        <a href="javascript:void(0);">Filter</a>
                    </div>
                </div>
            </div>
            <div class="row filter-active">
                <div class="col-12">
                    <div class="filter-wrap">
                        <div class="row">
                            <div class="product-filter col-lg-3 col-sm-6 col-12">
                                <h3 class="filter-title">Sort by</h3>
                                <ul class="sort-by">
                                    <li><a href="#">Default</a></li>
                                    <li><a href="#">Popularity</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Newness</a></li>
                                    <li><a href="#">Price: Low to High</a></li>
                                    <li><a href="#">Price: High to Low</a></li>
                                </ul>
                            </div>
                            <!-- Product Filter -->
                            <div class="product-filter col-lg-3 col-sm-6 col-12">
                                <h3 class="filter-title">color filters</h3>
                                <ul class="color-filter">
                                    <li><a href="#">Black</a></li>
                                    <li><a href="#">Brown</a></li>
                                    <li><a href="#">Orange</a></li>
                                    <li><a href="#">red</a></li>
                                    <li><a href="#">Yellow</a></li>
                                </ul>
                            </div>
                            <!-- Product Filter -->
                            <div class="product-filter col-lg-3 col-sm-6 col-12">
                                <h3 class="filter-title">product tags</h3>
                                <ul class="product-tags">
                                    <li><a href="#">New</a></li>
                                    <li><a href="#">brand</a></li>
                                    <li><a href="#">black</a></li>
                                    <li><a href="#">white</a></li>
                                    <li><a href="#">Honey</a></li>
                                    <li><a href="#">table</a></li>
                                    <li><a href="#">Lorem</a></li>
                                    <li><a href="#">ipsum</a></li>
                                    <li><a href="#">dolor</a></li>
                                    <li><a href="#">sit</a></li>
                                    <li><a href="#">amet</a></li>
                                </ul>
                            </div>
                            <div class="product-filter col-lg-3 col-sm-6 col-12">
                                <h3 class="filter-title">Filter by Price</h3>
                                <div class="filter-price">
                                    <form action="#">
                                        <div id="slider-range"></div>
                                        <div class="row">
                                            <div class="col-7">
                                                <p>Price :
                                                    <input type="text" id="amount">
                                                </p>
                                            </div>
                                            <div class="col-5 text-right">
                                                <button>filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <ul class="row">
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/15.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/11.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/14.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/12.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/8.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/5.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/11.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/12.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/10.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/9.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/8.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/7.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/4.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/6.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/3.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/5.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-center">
                            <a class="loadmore-btn" href="javascript:void(0);">Load More</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="chair">
                    <ul class="row">
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/18.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/17.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/16.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/15.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/14.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/13.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/12.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/11.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="table">
                    <ul class="row">
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/15.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/11.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/14.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/12.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/10.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/9.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/8.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/7.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="bed">
                    <ul class="row">
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/10.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/9.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/8.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/7.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/4.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/6.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/3.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/5.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="decorative">
                    <ul class="row">
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/15.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/11.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/14.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/12.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/10.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/9.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/8.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/7.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>New</span>
                                    <img src="assets/images/product/4.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <span>Sale</span>
                                    <img src="assets/images/product/6.jpg" alt="">
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                    href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                    <p class="pull-left">$125
                                        <del>$156</del>
                                    </p>
                                    <ul class="pull-right d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
