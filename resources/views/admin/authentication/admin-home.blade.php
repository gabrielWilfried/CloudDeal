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
                    <h4 class="text-white mb-20">Past week Revenue</h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="col-md-8">
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ toMoney($pastWeekRevenue) }}</h3>
                                <p class="text-white-50 font-weight-700" >Revenue</p>
                            </div>
                            <div class="col-md-8">
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ toMoney($boostRevenue) }}</h3>
                                <p class="text-white-50 font-weight-700" >Boost Revenue</p>
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
                            <div class="icon col-md-4 d-flex justify-content-center">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center flex-column">
                                <h3 class="font-weight-600 text-white ml-4  mb-0 mt-0">{{ $totalUsers }}</h3>
                                <p class="text-white-50 font-weight-700" >Total Users</p>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center flex-column">
                                <h3 class="font-weight-600 text-white ml-3 mb-0 mt-0">{{ $totalUsers  -  $numOfSellers }}</h3>
                                <p class="text-white-50 font-weight-700" >Clients</p>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center flex-column">
                                <h3 class="font-weight-600 text-white ml-3 mb-0 mt-0">{{ $numOfSellers }}</h3>
                                <p class="text-white-50 font-weight-700" >Sellers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box bg-primary">
                <div class="box-body">
                    <h4 class="text-white mb-20">Total Revenue</h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="col-md-8">
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ toMoney($totalRevenue) }}</h3>
                                <p class="text-white-50">Earning</p>
                            </div>
                            <div class="col-md-8">
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ toMoney($totalBoostRevenue) }}</h3>
                                <p class="text-white-50">Boost Earn</p>
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
                    <h4 class="text-white mb-20">Orders </h4>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div>
                                <h3 class="font-weight-600 text-white mb-0 mt-0">{{ $pendingOrders }}</h3>
                                <p class="text-white-50">Pending Orders</p>
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
            <div class="box">
                <div class="box-header no-border">
                    <h4 class="box-title">
                        Numer of Ads Created
                    </h4>
                </div>
                <div class="box-body pt-0">
                    <div class="d-none" id="get-ads-table"
                        months={{  $adsByMonth->pluck('month') }}
                        ad-count={{ $adsByMonth->pluck('ad_count') }}>
                    </div>
                    <div id="yearly-comparison"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Revenue</h4>
                    <div class="box-controls pull-right">
                        <span class="badge-pill badge-light px-10">Year</span>
                        <span class="badge-pill badge-light px-10 mx-10">Day</span>
                        <span class="badge-pill badge-primary px-10">Month</span>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <div class="d-none" id="get-revenue-table"
                        months2={{  $revenueByMonth->pluck('month') }}
                        revenue={{ $revenueByMonth->pluck('revenue') }}>
                    </div>
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
