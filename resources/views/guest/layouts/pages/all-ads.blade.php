@extends('guest.layouts.layout')

@section('content')
@include('guest.includes.navbanner')

<div class="product-area ptb-100 product-sidebar-area">
    <div class="container" x-data="data" x-init='getAllAds'>
        <div class="row revarce-wrap">
            <div class="col-lg-3 col-12">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <h4 class="widget-title">Search Product</h4>
                        <form action="{{route('dashboard.index') }}" class="searchform" method="get">
                            <input type="text" name="search_text" placeholder="Search Product...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="product-filter">
                        <h4 class="widget-title">Filter by Price</h4>
                        <div class="filter-price">
                            <form action="#" method="get">
                                <div id="slider-range"></div>
                                <div class="row">
                                    <div class="col-7">
                                        <p>Price :
                                            <input type="text" id="amount">
                                        </p>
                                    </div>
                                    <div class="col-5 text-right">
                                        {{-- <button type="submit" x-onclick>filter</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget widget_categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                            @foreach ($allCategories as $category)
                            <li><label for="{{$category->name }}">{{$category->name }}</label><input type="checkbox"
                                    id="{{$category->name }}" name="category" value="{{ $category->name }}"></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_recent_entries">
                        <h4 class="widget-title">Related Product</h4>
                        <ul>
                            <li>
                                <div class="post-img">
                                    <img src="{{ asset('assets/images/post/1.jpg a') }}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="shop.html">Mustard Oil</a>
                                    <p>$478.56</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <img src="{{ asset('assets/images/post/2.jpg" a') }}" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="shop.html">Mustard Oil</a>
                                    <p>$245.56</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <img src="{{ asset('assets/images/post/3.jpg" a') }}" alt="">
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
                        <select name="stor" class="select-style" >
                            <option disabled selected>Sort by Defalt</option>
                            <template x-for="town in data.towns">
                                <option x-text="town.name"></option>
                            </template>
                        </select>
                    </div>
                    <div class=" col-sm-5 col-12">
                        <p class="total-product"
                            x-text="'Showing '+data.annonces.from+ ' - '+ data.annonces.to+ ' results of '+ +data.annonces.total">
                        </p>
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
                            <template x-for="ad in data.annonces.data">
                                <li class="col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{ asset('assets/images/product/1.jpg') }}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a :href="ad.url_detail"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="{{ route('chat.index') }}"><i
                                                                class="fa fa-send"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a :href="ad.url_detail" x-text="ad.name"></a></h3>
                                            <p class="pull-left" x-text="ad.format_price">
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </template>
                        </ul>
                        <div class="row">
                            <div class="col-12">
                                <div class="pagination-wrapper text-center">
                                    <ul class="page-numbers">
                                        <li ><a x-on:click="previousPage()" :class="data.annonces.current_page !== 1  ? 'prev page-numbers' : 'disable'"  :disabled="page === 1"><i
                                                    class="fa fa-angle-left"></i></a></li>
                                        <template
                                            x-for="number in Array.from({ length: maxPageNumber - minPageNumber  + 1 }, (_, index) => minPageNumber + index)">

                                            <li ><span class="page-numbers" :class="data.annonces.current_page === number ? 'active' : ''"
                                                    x-on:click="currentPage(number)" x-text="number"></span></li>

                                        </template>
                                        <li ><a :class="data.annonces.current_page !== totalPages  ? 'next page-numbers' : 'disable'"  x-on:click="nextPage()"
                                                :disabled="page === totalPages"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane product-list" id="list">
                        <ul class="row">
                            <template x-for="ad in data.annonces.data">
                                <li class="col-12">
                                    <div class="product-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="product-img">
                                                    <span>New</span>
                                                    <img src="{{ asset('assets/images/product/19.jpg') }}" alt="">
                                                    <div class="product-icon flex-style">
                                                        <ul>
                                                            <li><a :href="ad.url_detail"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                            <li><a href="{{ route('chat.index') }}"><i
                                                                        class="fa fa-send"></i></a></li>
                                </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="product-content">
                    <div class="product-text fix">
                        <h3><a :href="ad.url_detail" x-text="ad.name"></p></a></h3>
                        <span class="pull-left" x-text="ad.format_price"></span>

                    </div>
                    <p x-text="ad.description"></p>
                    <ul class="cart-btn">
                        <li><a href="{{ route('chat.index') }}">Contact Seller</a></li>
                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </li>
    </template>
    </ul>
    <div class="row">
        <div class="col-12">
            <div class="pagination-wrapper text-center">
                <ul class="page-numbers">
                    <li ><a class="prev page-numbers"
                            x-on:click="previousPage()" :class="true ? 'disable' : ''" :disabled="page === 1"><i
                                class="fa fa-angle-left"></i></a></li>
                    <template
                        x-for="number in Array.from({ length: maxPageNumber - minPageNumber  + 1 }, (_, index) => minPageNumber + index)">

                        <li ><span class="page-numbers" :class="data.annonces.current_page === number ? 'active' : ''"
                                x-on:click="currentPage(number)" x-text="number"></span></li>

                    </template>
                    <li ><a class="next page-numbers" x-on:click="nextPage()" :class="data.annonces.current_page === totalPages ? 'disable' : ''"
                            :disabled="page === totalPages"><i class="fa fa-angle-right"></i></a>
                    </li>
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

@section('script')
<script src="{{ asset('assets/js/search.js') }}"></script>
@endsection