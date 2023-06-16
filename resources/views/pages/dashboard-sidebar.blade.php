@extends('layouts.default')

@section('content')

    @include("includes.breadcumb")

    <div class="product-area ptb-100 product-sidebar-area">
        <div class="container">
            <div class="row revarce-wrap">
                <div class="col-lg-3 col-12">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <h4 class="widget-title">Search Product</h4>
                            <form action="#" class="searchform">
                                <input type="text" name="s" placeholder="Search Product...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="product-filter">
                            <h4 class="widget-title">Filter by Price</h4>
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
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Categories</h4>
                            <ul>
                                <li><a href="#">Coconut Oil</a></li>
                                <li><a href="#">Honey</a></li>
                                <li><a href="#">Olive Oil</a></li>
                                <li><a href="#">Nut Oil</a></li>
                                <li><a href="#">Mustard Oil</a></li>
                                <li><a href="#">Sunrise Oil</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_recent_entries">
                            <h4 class="widget-title">Related Product</h4>
                            <ul>
                                <li>
                                    <div class="post-img">
                                        <img src="{{asset('assets/images/post/1.jpg a')}}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="shop.html">Mustard Oil</a>
                                        <p>$478.56</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <img src="{{asset('assets/images/post/2.jpg" a')}}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="shop.html">Mustard Oil</a>
                                        <p>$245.56</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <img src="{{asset('assets/images/post/3.jpg" a')}}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="shop.html">Mustard Oil</a>
                                        <p>$219.56</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row mb-30">
                        <div class="col-sm-4 col-12">
                            <select name="stor" class="select-style">
                                <option disabled selected>Sort by Defalt</option>
                                <option>Australia</option>
                                <option>Brazil</option>
                                <option>Cambodia</option>
                                <option>Dominica</option>
                                <option>France</option>
                                <option>Guyana</option>
                                <option>Hong Kong</option>
                                <option>Ireland</option>
                                <option>Japan</option>
                                <option>Malaysia</option>
                                <option>Nepal</option>
                                <option>Oman</option>
                                <option>Peru</option>
                            </select>
                        </div>
                        <div class=" col-sm-5 col-12">
                            <p class="total-product">Showing 1-12 of 150 Results</p>
                        </div>
                        <div class="col-sm-3 col-12">
                            <ul class="nav tab-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="grid">
                            <ul class="row">
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/1.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/2.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/5.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/7.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/9.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/6.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/14.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/16.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{asset('assets/images/product/18.jpg')}}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="pagination-wrapper text-center">
                                        <ul class="page-numbers">
                                            <li><a class="prev page-numbers" href="#"><i
                                                        class="fa fa-angle-left"></i></a></li>
                                            <li><a class="page-numbers" href="#">1</a></li>
                                            <li><span class="page-numbers current">2</span></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="next page-numbers" href="#"><i
                                                        class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane product-list" id="list">
                            <ul class="row">
                                <li class="col-12">
                                    <div class="product-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="product-img">
                                                    <span>New</span>
                                                    <img src="{{asset('assets/images/product/19.jpg')}}" alt="">
                                                    <div class="product-icon flex-style">
                                                        <ul>
                                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                                    href="javascript:void(0);"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                            <li><a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                            </li>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="product-content">
                                                    <div class="product-text fix">
                                                        <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                                        <span class="pull-left">$351.56</span>
                                                        <ul class="pull-right d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                        has roots in a piece of classical Latin literature from 45 BC, </p>
                                                    <ul class="cart-btn">
                                                        <li><a href="cart.html">Add to Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="product-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="product-img">
                                                    <span>New</span>
                                                    <img src="assets/images/product/20.jpg" alt="">
                                                    <div class="product-icon flex-style">
                                                        <ul>
                                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                                    href="javascript:void(0);"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                            <li><a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                            </li>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="product-content">
                                                    <div class="product-text fix">
                                                        <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                                        <span class="pull-left">$351.56</span>
                                                        <ul class="pull-right d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                        has roots in a piece of classical Latin literature from 45 BC, </p>
                                                    <ul class="cart-btn">
                                                        <li><a href="cart.html">Add to Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="product-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="product-img">
                                                    <span>New</span>
                                                    <img src="assets/images/product/21.jpg" alt="">
                                                    <div class="product-icon flex-style">
                                                        <ul>
                                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                                    href="javascript:void(0);"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                            <li><a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                            </li>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="product-content">
                                                    <div class="product-text fix">
                                                        <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                                        <span class="pull-left">$351.56</span>
                                                        <ul class="pull-right d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                        has roots in a piece of classical Latin literature from 45 BC, </p>
                                                    <ul class="cart-btn">
                                                        <li><a href="cart.html">Add to Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="product-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="product-img">
                                                    <span>New</span>
                                                    <img src="assets/images/product/22.jpg" alt="">
                                                    <div class="product-icon flex-style">
                                                        <ul>
                                                            <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                                    href="javascript:void(0);"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                            <li><a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                                            </li>
                                                            <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="product-content">
                                                    <div class="product-text fix">
                                                        <h3><a href="single-product.html">Pure Nature Product</a></h3>
                                                        <span class="pull-left">$351.56</span>
                                                        <ul class="pull-right d-flex">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star-half-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                        has roots in a piece of classical Latin literature from 45 BC, </p>
                                                    <ul class="cart-btn">
                                                        <li><a href="cart.html">Add to Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-12">
                                    <div class="pagination-wrapper text-center">
                                        <ul class="page-numbers">
                                            <li><a class="prev page-numbers" href="#"><i
                                                        class="fa fa-angle-left"></i></a></li>
                                            <li><a class="page-numbers" href="#">1</a></li>
                                            <li><span class="page-numbers current">2</span></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="next page-numbers" href="#"><i
                                                        class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
