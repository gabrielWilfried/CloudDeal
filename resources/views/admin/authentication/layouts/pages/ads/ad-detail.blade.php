@extends('admin.authentication.layouts.pages.ads.default')


@section('content')
    <section class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box box-body b-1 text-center no-shadow">
                                    <img src="{{ $ad->image_path }}" id="product-image"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="pro-photos">
                                    @forelse ($ad->files_path as $files)
                                        <div class="photos-item item-active">
                                            <img src="{{ $files->path }}" alt="">
                                        </div>
                                    @empty
                                        <div class="box box-body b-1 text-center no-shadow">
                                            <img src="{{ $ad->image_path }}" id="product-image"
                                                class="img-fluid" alt="">
                                        </div>
                                    @endforelse

                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-8 col-sm-6">
                                <h2 class="box-title mt-0">{{ $ad->name }}</h2>
                                @isset($boost)
                                    <p class="d-inline float-right w-95 fs-3">Boosted till <span
                                            class="text-success">{{ $boost->format_date }}</span></p>
                                @endisset

                                <h1 class="pro-price mb-0 mt-20">{{ $ad->format_price }}
                                </h1>
                                <hr>
                                <p>{{ $ad->description }}</p>
                                <div data-ad-id={{ $ad->id }} id="idContainer" style="display: none"></div>
                                <hr>
                                <div class="gap-items">
                                    <button data-toggle="modal" data-target="#exampleModalCenter"
                                        class="btn btn-success btn-rounded"><i class="fa fa-rocket"></i> Boost</button>
                                    <a href="{{ route('admin.ads.edit', ['annonce' => $ad]) }}"
                                        class="btn btn-warning btn-rounded"><i class="fa fa-edit"></i> Edit</a>
                                    <form method="post" onsubmit="event.preventDefault()" style="display: inline">
                                        @csrf
                                        <button type="submit" id="delete-alert" class="btn btn-danger btn-rounded"><i
                                                class="fa fa-trash"></i> Delete</button>
                                    </form>
                                    @if ($ad->is_verified == false)
                                        <form name="" method="post" style="display: inline"
                                            action="{{ route('admin.ads.verify', ['annonce' => $ad]) }}">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-rounded btn-info mb-5">Publish
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="box-title mt-40 text-success">Comments</h4>
                                <div class="row">
                                    @forelse ($comments as $comment)
                                        <div class="col-md-6 col-8">
                                            <div class="box">
                                                <div class="box-body">
                                                    <h4 class="box-title">{{ $comment->user->name }}</h4>
                                                    <p>{{ $comment->content }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-md-6 col-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <h4 class="box-title">No comment</h4>
                                                </div>
                                            </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="box-title mt-40 text-danger">Signals</h4>
                            <div class="row">
                                @forelse ($signals as $signal)
                                    <div class="col-md-6 col-8">
                                        <div class="box">
                                            <div class="box-body">
                                                <h4 class="box-title">{{ $signal->annonce->user->name }}</h4>
                                                <p>{{ $signal->reasons }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-6 col-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <p>No signal</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>boost
            </div>
        </div>

    </section>
@endsection
@include('admin.authentication.layouts.pages.modal.modal-boost')

@section('script')
    <script src="{{ asset('admin-assets/js/pages/ecommerce_details.js') }}"></script>
@endsection
