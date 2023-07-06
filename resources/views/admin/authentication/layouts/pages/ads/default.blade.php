@extends('admin.authentication.layouts.layout-admin')
@section('style')
    <link href="{{ asset('admin-assets/components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')
    <div class="container-full">

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Ads</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">ads</li>
                            <li class="breadcrumb-item active" aria-current="page">My Ads</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="right-title">
                <div class="dropdown">
                    <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                      <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                      <div class="dropdown-divider"></div>
                      <button type="button" class="btn btn-rounded btn-success">Submit</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            @yield('content')
        </div>
      </section>
@endsection

@section('script')
    <script src="{{ asset('admin-assets/components/datatable/datatables.min.css') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/data-table.js') }}"></script>
    <script src="{{ asset('admin-assets/components/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin-assets/custom/js/alert.js') }}"></script>
@endsection

