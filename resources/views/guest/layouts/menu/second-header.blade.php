<div class="fluid-container">
    <div class="row">
        <div class="col-lg-3 col-md-7 col-sm-6 col-6">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-9 d-none d-lg-block">
            <nav class="mainmenu">
                <ul class="d-flex">
                    <li class="{{ Request::is('clouddeal') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ Request::is('clouddeal/allAds') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.index') }}">Best Ads</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Categories <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            @foreach ($allCategories as $all)
                                <li><a id="category" href="{{ route('dashboard.index') }}">{{ $all->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="{{ Request::is('clouddeal/about') ? 'active' : '' }}"><a
                            href="{{ route('about') }}">About</a></li>
                    <li class="{{ Request::is('clouddeal/contact') ? 'active' : '' }}"><a
                            href="{{ route('contact') }}">Contact</a></li>
                    <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                </ul>
            </nav>
        </div>

        <div class="col-md-1 col-sm-3 col-7 d-block d-lg-none" style="position: absolute; right: 0">
            <div class="responsive-menu-tigger">
                <a href="javascript:void(0);">
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- responsive-menu area start -->
<div class="responsive-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-12 d-block d-lg-none">
                <ul class="metismenu">
                    <li class="sidemenu-items active">
                        <a aria-expanded="false" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="sidemenu-items {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a aria-expanded="false" href="{{ route('dashboard.index') }}">Best Ads</a>
                    </li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Categories</a>
                        <ul aria-expanded="false">
                            @forelse ($allCategories as $all)
                                <li><a href="{{ route('dashboard.index') }}">{{ $all->name }}</a></li>
                            @empty
                                <p>No categorie</p>
                            @endforelse
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    .mainmenu .active a {
        color: red;
    }

    .mainmenu a {
        color: black;
    }
</style>
