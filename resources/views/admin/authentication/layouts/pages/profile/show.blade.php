@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
    @include('admin.authentication.layouts.pages.modal.modal-profile')
    @include('admin.authentication.layouts.pages.modal.modal-password')

    <style>
        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img img {
            width: 70%;
            height: 70%;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 60%;
            border: none;
            border-radius: 50%;
            font-size: 15px;
            background: #212529b8;
            color: #0062cc
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
            font-weight: bold;
        }

        .profile-head h6 {
            color: green;
            font-weight: bold;
        }

        .profile-edit-btn {
            color: white;
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            cursor: pointer;
            background-color: #3366cc;
        }

        .proile-rating {
            font-size: 16px;
            color: #818182;
            margin-top: 5%;
            color: #333;
            font-weight: bold;
        }

        .proile-rating span {
            color: #818182;
            font-size: 15px;

        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-actions {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-actions p {
            margin-top: 20%;
        }



        .profile-actions ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }

        .tabContent-label {
            color: #333;
        }
    </style>

    <div class="col-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">My Profile</h3>
                <!------ Include the above in your HEAD tag ---------->
            </div>
            <div class="container emp-profile">
                <form method="get">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src='{{ asset('assets/images/Apropos/vane1.jpg') }}' alt="" />
                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="file" />
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5>
                                    {{ $user->name }}
                                </h5>
                                <h6>
                                    online
                                </h6>
                                <p class="proile-rating">pseudo : <span>{{ $user->pseudo }}</span></p>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="proGWfile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Others</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-actions">
                                <p>
                                    <button style="background-color: #3366cc; color:white" type="button" id="changeProfile"
                                        class="btn btn-rounded  mb-5">Edit Profil</button>

                                </p>
                                <p>
                                    <button style="background-color: #3366cc; color:white" type="button" id="changePasswd"
                                        class="btn btn-rounded  mb-5">Edit Password</button>
                                </p>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="tabContent-label">User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $user->id }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p>{{ $user->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Email</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p>{{ $user->email }}</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Phone</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            {{ $user->phone }} </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Address</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p>{{ $user->address }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">
                                                Gender</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p>{{ $user->sex }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Status</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            @if ($user->is_admin)
                                                <p>Administrator</p>
                                            @else
                                                <p>User</p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Registration Date</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p> 2023-07-11 10:15:12</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Last Login</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p>2023-07-08 13:42:55</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="tabContent-label">Last Update</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p>2023-07-11 10:15:12</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
