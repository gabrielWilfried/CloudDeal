@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')

    <div class="single-product-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-single-img">
                        <div class="product-active owl-carousel">
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/1.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/2.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/3.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/4.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/5.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="product-thumbnil-active  owl-carousel">
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/1.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/2.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/3.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/4.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product/product-details/5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/product/product-details/6.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-single-content">


                        <h3>{{ $ad->name }}</h3>
                        <div class="rating-wrap fix">
                            <span class="pull-left">{{ toMoney($ad->price) }}</span>
                        </div>
                        <p>{{ $ad->description }}</p>
                        <ul class="input-style">
                            <li class="contact-seller"><a href="">Contact seller</a>  </li>
                            <li class="contact-seller">
                                <form action="{{route('annonces.signaler', $ad->id)}}"  method="post">
                                    @csrf
                                    <div class="form-group">
                                    <button type="button" id="btn-signaler" class="btn btn-primary">Signal</button>
                                    </div>
                                    <div id="zone-raison" style="display: none;">
                                        <div class="form-group">
                                            <textarea name="raison" id="raison" rows="3" placeholder="Veuillez entrer la raison" required = "required"></textarea>
                                        </div>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                
                                </form>
                             </li>
                        </ul>
                        <ul class="cetagory">
                            <li>Categories:</li>
                            @foreach($ad->category as $category)

                             @endforeach
                             <li>
                                
                             </li>
                        </ul>
                       

                        <ul class="socil-icon">
                            <li>Share :</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        
                        @include('guest.includes.commentlist')
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script src="{{ asset('assets/js/signaler.js') }}"></script>
    @include('guest.includes.best-ad')
@endsection
