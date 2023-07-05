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
                                <img src="{{ asset('assets/images/featured/3.jpg') }}" id="product-image"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="pro-photos">
                                <div class="photos-item item-active">
                                    <img src="{{ asset('assets/images/featured/3.jpg') }}" alt="">
                                </div>
                                <div class="photos-item">
                                    <img src="{{ asset('assets/images/featured/3.jpg') }}" alt="">
                                </div>
                                <div class="photos-item">
                                    <img src="{{ asset('assets/images/featured/3.jpg') }}" alt="">
                                </div>
                                <div class="photos-item">
                                    <img src="{{ asset('assets/images/featured/3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <h2 class="box-title mt-0">{{ $ad->name }}</h2>
                            <h1 class="pro-price mb-0 mt-20">{{ $ad->format_price }}
                            </h1>
                            <hr>
                            <p>{{ $ad->description }}</p>
                            <div data-ad-id={{ $ad->id }} id="idContainer" style="display: none"></div>
                            <hr>
                            <div class="gap-items">
                                <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success btn-rounded"><i class="fa fa-rocket"></i> Boost</button>
                                <a href="{{ route('admin.ads.edit', ['annonce' =>$ad]) }}"  class="btn btn-warning btn-rounded"><i class="fa fa-edit"></i> Edit</a>
                                <form method="post" onsubmit="event.preventDefault()" style="display: inline">
                                    @csrf
                                    <button type="submit" id="delete-alert" class="btn btn-danger btn-rounded"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 class="box-title mt-40">Comments</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @forelse ($comments as $comment)
                                        <tr>
                                            <td width="390">{{ $comment->user->name }}</td>
                                            <td>{{ $comment->content }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td width="390">No comment</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <h4 class="box-title mt-40">Signals</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @forelse ($signals as $signal)
                                        <tr>
                                            <td>{{ $signal->reasons }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td width="390">No signal</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.authentication.layouts.pages.modal.modal-boost')
</section>
@endsection

