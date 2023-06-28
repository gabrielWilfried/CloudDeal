@extends('admin.authentication.layouts.layout-admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin-assets/components/chartist-js-develop/chartist.css') }}">
@endsection
@section('body')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title br-0">Dashboard</h3>
                </div>
                <div class="right-title w-170">
                    <span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
                        <span class="subheader_daterange-label">
                            <span class="subheader_daterange-title"></span>
                            <span class="subheader_daterange-date text-primary"></span>
                        </span>
                        <a href="#" class="btn btn-rounded btn-sm btn-primary">
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <div class="box">
                        <div class="box-header no-border">
                            <h4 class="box-title">
                                Overview
                            </h4>
                        </div>
                        <div class="box-body pt-0">
                            <div id="yearly-comparison"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title font-weight-600 text-uppercase">Email Campaign</h4>
                                </div>
                                <div class="box-body">
                                    <div class="">
                                        <div id="email-campaign"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h1 class="my-0">20k </h1>
                                            <p class="text-fade mb-0">Montly Income</p>
                                        </div>
                                        <div class="bg-info px-30 py-10 text-center rounded"><i
                                                class="ti-arrow-down text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box bg-danger">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-center">
                                            <h2 class="font-weight-600">21k</h2>
                                            <p>Total visitors</p>
                                        </div>
                                        <div id="visitors-char"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h1 class="my-0">205k</h1>
                                            <p class="text-fade mb-0">Today Income</p>
                                        </div>
                                        <div class="bg-success px-30 py-5 text-center rounded"><i
                                                class="ti-arrow-up text-white"></i></div>
                                    </div>
                                </div>
                                <div class="progress progress-sm rounded-0 mt-0 mb-0">
                                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 72%;"
                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body p-0">
                            <div class="row no-gutters">
                                <div class="col-md-6 col-12">
                                    <div class="box no-shadow mb-0 rounded-0">
                                        <div class="box-header no-border">
                                            <h4 class="box-title mb-0 text-uppercase">
                                                Last Posts
                                            </h4>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="media-list media-list-hover">
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Meet Craftwork.</h5>
                                                    </div>
                                                </a>
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Cook Design Right!</h5>
                                                    </div>
                                                </a>
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Start Own Bussines</h5>
                                                    </div>
                                                </a>
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>How to Make Interface</h5>
                                                    </div>
                                                </a>
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Show Me Your Design</h5>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5"
                                        style="background-image: url(../images/gallery/landscape7.jpg)">
                                        <div class="box-header no-border">
                                            <h4 class="box-title mb-0">
                                                <span class="avatar avatar-lg bg-success">DK</span>
                                            </h4>
                                            <ul class="box-controls">
                                                <li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-body">
                                            <div class="text-right mt-100 pt-25">
                                                <h3 class="text-white"><small class="mr-10"><i
                                                            class="fa fa-commenting"></i></small> 3</h3>
                                                <h2 class="text-white"><small class="mr-10"><i
                                                            class="fa fa-heart"></i></small> 23</h2>
                                                <h1 class="text-white"><small class="mr-10"><i
                                                            class="fa fa-eye"></i></small> 189</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Revenue</h4>
                            <div class="box-controls pull-right">
                                <span class="badge badge-pill badge-light px-10">Year</span>
                                <span class="badge badge-pill badge-light px-10 mx-10">Day</span>
                                <span class="badge badge-pill badge-primary px-10">Month</span>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <div id="myChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="box bg-warning">
                        <div class="box-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-0 font-weight-600 text-dark text-uppercase">Quick note</h6>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <i class="ti-reload"></i>
                                    </a>
                                </div>
                            </div>
                            <h2 class="font-weight-300 text-dark">What’s on your mind?</h2>
                            <button type="button"
                                class="waves-effect waves-light btn btn-outline btn-rounded btn-dark float-right">SAVE</button>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Company Revenue</h4>
                        </div>
                        <div class="box-body">
                            <div id="chart-line"></div>
                        </div>
                    </div>
                    <div class="box bg-primary">
                        <div class="box-body">
                            <h4 class="text-white mb-20">Revenue Overview </h4>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-weight-600 text-white mb-0 mt-0">34040</h3>
                                        <p class="text-white-50">Revenue</p>
                                        <h5 class="text-white">+34040 <span class="ml-40"><i
                                                    class="fa fa-angle-down mr-10"></i><span
                                                    class="text-white-50">0.036%</span></span> </h5>
                                    </div>
                                </div>
                                <div>
                                    <div id="apexChart2" class="mx-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Report</h4>
                            <ul class="box-controls pull-right">
                                <li><a class="box-btn-close" href="#"></a></li>
                                <li><a class="box-btn-slide" href="#"></a></li>
                                <li><a class="box-btn-fullscreen" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="box-body bg-primary p-0">
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="p-15">
                                        <div class="lookup lookup-lg lookup-right d-none d-lg-block">
                                            <input type="text" name="s" placeholder="Search" class="w-p100">
                                        </div>
                                        <div class="mt-30">
                                            <h4>Status: Live</h4>
                                            <p class="mb-0 font-weight-700"><i
                                                    class="ti-location-pin text-danger font-size-16"></i> <span
                                                    class="font-size-12">12 Osborne Drive Suite 845</span></p>
                                            <div class="mt-40">
                                                <p class="mb-0 font-weight-700">Miami</p>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated"
                                                        role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-40">
                                                <p class="mb-0 font-weight-700">New York</p>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning progress-bar-striped progress-bar-animated"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 40%">
                                                        <span class="sr-only">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-40">
                                                <p class="mb-0 font-weight-700">Tampa</p>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 20%">
                                                        <span class="sr-only">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-12 bg-white">
                                    <div id="reports" style="height: 400px" class="overflow-hidden"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin-assets/components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('admin-assets/components/zingchart_branded_version/zingchart.min.js') }}"></script>
@endsection
