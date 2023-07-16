@extends('admin.authentication.layouts.pages.ads.default')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .bold {
            font-weight: bold;
        }

        .large {
            font-size: 20px;
        }

        .normal {
            font-size: 14px;
        }

        .italic {
            font-style: italic;
        }

        .underline {
            text-decoration: underline;
        }

        .small {
            font-size: 12px;
        }

        .select-buttons {
            margin-top: 10px;
        }

        .submit-button {
            float: right;
        }
    </style>

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Letters</h3>

                </div>
                <div class="box-body">
                </div>
            </div>
        </div>
    </div>

@endsection
