@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    <style>
        .panel-heading {
            background-color: #87ceeb;
            /* Couleur bleu ciel pour le fond */
        }

        .box {
            border-color: #87ceeb;
            border-width: 2px;
            border-style: solid;
        }


        .input-group {
            margin-bottom: 30px;
            width: 100%;

        }

        .btn {
            position: relative;
            padding: 6px 12px;
            left border-radius: 3px 0 0 3px;
            float: right;
            background-color: green;
        }

        .fa.fa-th-large {
            color: green;
            /* Couleur verte pour l'icône */
        }

        .form-control {
            width: 100%;
        }
    </style>

    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="fa fa-th-large"></span>
                        Change password
                    </h3>
                </div>
            </div>
            <div class="container bootstrap snippets bootdey">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-2">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <br>
                                <img alt="" class="img-thumbnail"
                                    src='{{ asset('assets/images/Apropos/vane1.jpg') }}'>
                            </div>
                            <div style="margin-top:40px; width:100%;" class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="password"
                                        placeholder="Current Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="password" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-lg" type="password"
                                        placeholder="Confirm New Password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6"></div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <form>
                            <button class="btn btn-success" type="submit">
                                <span></span>save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
