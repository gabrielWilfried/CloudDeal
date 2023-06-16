<div class="fluid-container">
    <div class="row">
        <div class="col-lg-3 col-md-7 col-sm-6 col-6">
            @include('includes.logo')
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <nav class="mainmenu">
                <ul class="d-flex">
                    <li class="active">
                        <a href="javascript:void(0);">Home <i class="fa fa-angle-down"></i></a>
                    </li>

                    <li>
                        <a href="javascript:void(0);">Dashboard <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            <li><a href="{{ route('dashboard') }}">Dashboard Page</a></li>
                            <li><a href="{{ route('dashboard.sidebar') }}">Dashboard Sidebar</a></li>
                            <li><a href="{{ route('dashboard.singe-ad') }}">Ad Details</a></li>
                            <li><a href="{{route('dashboard.ad-list')}}">My ads</a></li>
                            <li><a href="{{ route('payment') }}">Payment</a></li>
                            <li><a href="{{  route('wishlist') }}">Wishlist</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Blog <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_style">
                            <li><a href="{{ route('blog') }}">blog Page</a></li>
                            <li><a href="{{ route('blog-details') }}">blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-4 col-lg-2 col-sm-5 col-4">
            <ul class="search-cart-wrapper d-flex">
                <li class="search-tigger"><a href="javascript:void(0);"><i class="flaticon-search"></i></a></li>
                <li>
                    <a href="javascript:void(0);"><i class="flaticon-like"></i> <span>2</span></a>
                    <ul class="cart-wrap dropdown_style">
                        <li class="cart-items">
                            <div class="cart-img">
                                <img src="assets/images/cart/1.jpg" alt="">
                            </div>
                            <div class="cart-content">
                                <a href="cart.html">Pure Nature Product</a>
                                <span>QTY : 1</span>
                                <p>$35.00</p>
                                <i class="fa fa-times"></i>
                            </div>
                        </li>
                        <li class="cart-items">
                            <div class="cart-img">
                                <img src="assets/images/cart/3.jpg" alt="">
                            </div>
                            <div class="cart-content">
                                <a href="cart.html">Pure Nature Product</a>
                                <span>QTY : 1</span>
                                <p>$35.00</p>
                                <i class="fa fa-times"></i>
                            </div>
                        </li>
                        <li>Subtotol: <span class="pull-right">$70.00</span></li>
                        <li>
                            <button>Check Out</button>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);"><i class="flaticon-shop"></i> <span>3</span></a>
                    <ul class="cart-wrap dropdown_style">
                        <li class="cart-items">
                            <div class="cart-img">
                                <img src="assets/images/cart/1.jpg" alt="">
                            </div>
                            <div class="cart-content">
                                <a href="cart.html">Pure Nature Product</a>
                                <span>QTY : 1</span>
                                <p>$35.00</p>
                                <i class="fa fa-times"></i>
                            </div>
                        </li>
                        <li class="cart-items">
                            <div class="cart-img">
                                <img src="assets/images/cart/3.jpg" alt="">
                            </div>
                            <div class="cart-content">
                                <a href="cart.html">Pure Nature Product</a>
                                <span>QTY : 1</span>
                                <p>$35.00</p>
                                <i class="fa fa-times"></i>
                            </div>
                        </li>
                        <li class="cart-items">
                            <div class="cart-img">
                                <img src="assets/images/cart/2.jpg" alt="">
                            </div>
                            <div class="cart-content">
                                <a href="cart.html">Pure Nature Product</a>
                                <span>QTY : 1</span>
                                <p>$35.00</p>
                                <i class="fa fa-times"></i>
                            </div>
                        </li>
                        <li>Subtotol: <span class="pull-right">$70.00</span></li>
                        <li>
                            <button>Check Out</button>
                        </li>
                    </ul>
                </li>
            </ul>
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
                        <ul aria-expanded="false">
                            <li><a href="index.html">Home Main</a></li>
                            <li><a href="index2.html">Home Two</a></li>
                            <li><a href="index3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Shop </a>
                        <ul aria-expanded="false">
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                            <li><a href="single-product.html">Product Details</a></li>
                            <li><a href="cart.html">Shopping cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Pages </a>
                        <ul aria-expanded="false">
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="single-product.html">Product Details</a></li>
                            <li><a href="cart.html">Shopping cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="sidemenu-items">
                        <a class="has-arrow" aria-expanded="false" href="javascript:void(0);">Blog</a>
                        <ul aria-expanded="false">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
