@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')

    <script>

        window.addEventListener('alpine:init', () => {
            Alpine.data('annonceList', (maxPrice) => ({
                searchText: '',
                priceFilter: '',
                minPrice: 0,
                maxPrice: maxPrice,
                sortBy: '',
                currentCategories: [],
                search(){

                },
                sort(){

                },
                filterByCategories(){

                },
                filterByPrice(){

                },
                filter(){
                    const checkboxValue = document.getElementById('{{$category->name }}').checked;
                    fetch('/').then(response => {
                        method: "POST",
                        body: JSON.stringify({ sortBy: checkboxValue }),
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                        console.log(response);
                    }).catch(error => concole.log(error));
                }

            }));
        });

    </script>

    <div class="product-area ptb-100 product-sidebar-area">
        <div class="container">
            <div class="row revarce-wrap">
                <div class="col-lg-3 col-12">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <h4 class="widget-title">Search Product</h4>
                            <form action="{{route('dashboard') }}" class="searchform" method="get" >
                                <input type="text" x-model="searchText" name="search_text" placeholder="Search Product...">
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
                                                <input type="text" id="amount" >
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
                                    @foreach ($categories as $category)
                                    <li><label for="{{$category->name }}">{{$category->name }}</label><input type="checkbox" id="{{$category->name }}" name="category" value="{{ $category->name }}" ></li>
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
                            <select name="stor" class="select-style">
                                <option disabled selected>Sort by Defalt</option>
                                @foreach ($towns as $town)
                                    <option>{{ $town->name }}</option>
                                @endforeach
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
                                @foreach ($annonces as $annonce)
                                <li class="col-lg-4 col-sm-6 col-12" x-show="filteredAnnonces.length > 0 " x-for="annonce in filteredAnnonces">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>New</span>
                                            <img src="{{ asset('assets/images/product/1.jpg') }}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a href="{{ route('dashboard.singe-ad') }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="{{ route('chat') }}"><i class="fa fa-send"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="single-product.html">{{ $annonce->name }}</a></h3>
                                            <p class="pull-left">{{ $annonce->price }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
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
                                @foreach ($annonces as $annonce)
                                <li class="col-12">
                                    <div class="product-wrap">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="product-img">
                                                    <span>New</span>
                                                    <img src="{{ asset('assets/images/product/19.jpg') }}"
                                                        alt="">
                                                    <div class="product-icon flex-style">
                                                        <ul>
                                                            <li><a href="{{ route('dashboard.singe-ad') }}"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="{{ route('chat') }}"><i class="fa fa-send"></i></a></li>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="product-content">
                                                    <div class="product-text fix">
                                                        <h3><a href="single-product.html">{{ $annonce->name }}</a></h3>
                                                        <span class="pull-left">{{ $annonce->price }}</span>

                                                    </div>
                                                    <p>{{ $annonce->description }}</p>
                                                    <ul class="cart-btn">
                                                        <li><a href="{{ route('chat.index') }}">Contact Seller</a></li>
                                                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
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
