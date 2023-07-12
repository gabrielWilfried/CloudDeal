<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloud Deal</title>
    @vite(['resources/js/app.js'])
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/components/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/components/OwlCarousel2/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/components/OwlCarousel2/dist/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/components/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/skin_color.css') }}">

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-assets/custom/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/components/jquery-toast-plugin-master/src/jquery.toast.css') }}">
    @yield('style')
</head>

<body>
    @include('admin.authentication.layouts.menus.header')

    <div class="wrapper">
       <aside class="main-sidebar">
            @include('admin.authentication.layouts.menus.aside')
        </aside>

       <div class="content-wrapper">
            <div class="container-full">
                @yield('body')
            </div>
       </div>

    </div>
    @include('admin.authentication.layouts.menus.footer')
    <!-- js -->

    <script src="{{ asset('admin-assets/components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('admin-assets/components/screenfull/screenfull.js') }}"></script>
    <script src="{{ asset('admin-assets/components/popper/dist/popper.min.js') }}"></script>
    <script src="{{ asset('admin-assets/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/components/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin-assets/components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin-assets/components/fastclick/lib/fastclick.js') }}"></script>

    <!-- Plugin -->
    <script src="{{ asset('admin-assets/components/apexcharts-bundle/irregular-data-series.js') }}"></script>
    <script src="{{ asset('admin-assets/components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('admin-assets/components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin-assets/lib/4/core.js') }}"></script>
    <script src="{{ asset('admin-assets/lib/4/maps.js') }}"></script>
    <script src="{{ asset('admin-assets/lib/4/geodata/worldLow.js') }}"></script>
    <script src="{{ asset('admin-assets/lib/4/themes/dataviz.js') }}"></script>
    <script src="{{ asset('admin-assets/lib/4/themes/animated.js') }}"></script>
    <script src="{{ asset('admin-assets/components/apexcharts-bundle/data.js') }}"></script>

    <!-- CrmX Admin App -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/template.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin-assets/js/demo.js') }}"></script>
    <script src="{{ asset('admin-assets/custom/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('admin-assets/components/jquery-toast-plugin-master/src/jquery.toast.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/toastr.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/notification.js') }}"></script>

    @yield('script')
</body>

</html>
