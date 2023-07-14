@extends('admin.authentication.layouts.layout-admin')

@section('style')
<link rel="stylesheet" href="{{ asset('admin-assets/components/chartist-js-develop/chartist.css') }}">
@endsection
@section('body')

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
            <div class="box bg-primary">
                <div class="box-body">
                    <h4 class="text-white mb-20">Revenue Today </h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div>
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ toMoney($todayRevenue) }}</h3>
                                <p class="text-white-50">Today revenue</p>
                                <h5 class="text-white">+34040 <span class="ml-40"><i
                                            class="fa fa-angle-down mr-10"></i><span
                                            class="text-white-50">0.036%</span></span> </h5>
                            </div>
                        </div>
                        <div>
                            <div class="mx-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box bg-primary">
                <div class="box-body">
                    <h4 class="text-white mb-20">Users</h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div>
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ $totalUsers }}</h3>
                                <p class="text-white-50">Total Users</p>
                                <h5 class="text-white">+34040 <span class="ml-40"><i
                                            class="fa fa-angle-down mr-10"></i><span
                                            class="text-white-50">0.036%</span></span> </h5>
                            </div>
                        </div>
                        <div>
                            <div class="mx-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box bg-primary">
                <div class="box-body">
                    <h4 class="text-white mb-20">Revenue</h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div>
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ toMoney($totalRevenue) }}</h3>
                                <p class="text-white-50">Total Earning</p>
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
        <div class="col-xl-6 col-12">
            <div class="box bg-primary">
                <div class="box-body">
                    <h4 class="text-white mb-20">Orders </h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div>
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ $pendingOrders }}</h3>
                                <p class="text-white-50">Pending Orders</p>
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
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="{{ asset('admin-assets/components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
<script src="{{ asset('admin-assets/components/zingchart_branded_version/zingchart.min.js') }}"></script>
@endsection
