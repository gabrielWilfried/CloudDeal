@extends('admin.authentication.layouts.pages.ads.default')


@section('style')
    <link rel="stylesheet" href="{{ asset('admin-assets/components/jquery-toast-plugin-master/src/jquery.toast.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/custom/css/style_modal.css') }}">
@endsection

@section('content')
    <div class="col-12">
        <div class="box" id="no-full-width">
            <div class="box-header with-border">
                <h3 class="box-title">List Ads</h3>
                <a type="button" href="{{ route('admin.ads.create') }}" class="btn btn-rounded btn-success mb-5">Publish</a>
            </div>
            <div class="box-body"  x-data="data" x-init="loadAds">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Town</th>
                                <th>Published date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="ad in data.annonces.data">
                                <tr>
                                    <td x-text="ad.name"></td>
                                    <td x-text="ad.format_price"></td>
                                    <td x-text="ad.category_name"></td>
                                    <td x-text="ad.town_name"></td>
                                    <td x-text="ad.created_at"></td>
                                    <td>
                                        <a :href="ad.url_to_ad_detail" class="btn btn-rounded btn-dark mb-5 "><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Town</th>
                                <th>Published date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="complex_header_info" role="status" aria-live="polite">Showing
                                1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="complex_header_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="complex_header_previous"><a
                                            href="#" aria-controls="complex_header" data-dt-idx="0" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="complex_header" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="complex_header"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="complex_header"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="complex_header"
                                            data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="complex_header"
                                            data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="complex_header"
                                            data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="complex_header_next"><a href="#"
                                            aria-controls="complex_header" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('message') !='')
        @include('admin.authentication.layouts.pages.notification.success-notifiation')
    @endif
@endsection

@section('script')
    <script src="{{ asset('admin-assets/components/jquery-toast-plugin-master/src/jquery.toast.css') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/toastr.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/notification.js') }}"></script>
@endsection
