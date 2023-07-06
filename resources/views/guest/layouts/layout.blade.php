<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

    @yield('style')

    <title>Cloud Deal</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>

    <div class="search-area flex-style">
        @include('guest.includes.search')
    </div>

    <header class="header-area">
        <div class="header-top bg-2">
            @include('guest.layouts.menu.first-header')
        </div>
        <div class="header-bottom">
            @include('guest.layouts.menu.second-header')
        </div>
    </header>
    @yield('content')

    <section class="social-newsletter-section">
        @include('guest.includes.landing-page.socials')
    </section>

    <div class="footer-area">
        <div class="footer-bottom">
            @include('guest.layouts.footer')
        </div>

    </div>

    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/mailchimp.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/custom/js/myscript.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @yield('script')

</body>

</html>
