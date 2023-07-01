@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')

    <div class="product-area ptb-100 product-sidebar-area">
        <div class="container">
            <div class="row revarce-wrap" x-data="data" x-init='getAllAds'>
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
                            <select name="stor" class="select-style">
                                <option disabled selected>Sort by Towns</option>
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
                        @include('guest.layouts.pages.table-ad-component')
                        @include('guest.layouts.pages.list-ad-component')
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrapper text-center">
                                <ul class="page-numbers">
                                    <li><a x-on:click="previousPage()"
                                            :class="data.annonces.current_page !== 1  ? 'prev page-numbers' : 'disable'"
                                            :disabled="page === 1"><i class="fa fa-angle-left"></i></a></li>
                                    <template
                                        x-for="number in Array.from({ length: maxPageNumber - minPageNumber  + 1 }, (_, index) => minPageNumber + index)">

                                        <li><span class="page-numbers"
                                                :class="data.annonces.current_page === number ? 'active' : ''"
                                                x-on:click="currentPage(number)" x-text="number"></span></li>

                                    </template>
                                    <li><a :class="data.annonces.current_page !== totalPages  ? 'next page-numbers' : 'disable'"
                                            x-on:click="nextPage()" :disabled="page === totalPages"><i
                                                class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection