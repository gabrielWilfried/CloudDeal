@extends('admin.authentication.layouts.pages.ads.default')



<link rel="stylesheet" href="{{ asset('admin-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') }}" />
<script src="{{ asset('admin-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Letters</h3>

                </div>
                <div class="box-body">
                    <form>
                        <textarea class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
