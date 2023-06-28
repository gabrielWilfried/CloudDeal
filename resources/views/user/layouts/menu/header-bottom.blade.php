<div class="fluid-container">
    <div class="row">
        <div class="col-lg-3 col-md-7 col-sm-6 col-6">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{asset ('assets/images/logo.png' )}}" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-9 d-none d-lg-block" >
            <nav class="mainmenu">
                <ul class="d-flex">
                    <li class="active">
                        <a href="javascript:void(0);">Home <i class="fa fa-angle-down"></i></a>
                    </li>

                    <li>
                        <a href="javascript:void(0);">Best Products <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            <li><a href="{{ route('dashboard') }}">Products</a></li>
                            <li><a href="{{ route('dashboard.singe-ad') }}">Product Details</a></li>
                            <li><a href="{{route('dashboard.ad-list')}}">My Products</a></li>
                            <li><a href="{{  route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li>
                        <a href="javascript:void(0);">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            <li><a href="{{ route('blog') }}">blog Page</a></li>
                            <li><a href="{{ route('blog-details') }}">blog Details</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                </ul>
            </nav>
        </div>

        <div class="col-md-1 col-sm-1 col-2 d-block d-lg-none">
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
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Home</a>
                    </li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Dashboard </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('dashboard') }}">Dashboard Page</a></li>
                            <li><a href="{{ route('dashboard.singe-ad') }}">Ad Details</a></li>
                            <li><a href="{{route('dashboard.ad-list')}}">My ads</a></li>
                            <li><a href="{{ route('payment') }}">Payment</a></li>
                            <li><a href="{{  route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </li>

                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Blog</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('blog') }}">blog Page</a></li>
                            <li><a href="{{ route('blog-details') }}">blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
