<div class="featured-product-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-left">
                    <h2>Best Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($annonces as $annonce)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="featured-product-wrap">

                        <div class="featured-product-img">
                            <img src="{{ asset('assets/images/product/4.jpg') }}" alt="">
                        </div>
                        <div class="featured-product-content">
                            <div class="row">
                                <div class="col-7">
                                    <h3><a href="shop.html">{{ $annonce->name }}</a></h3>
                                    <p>{{ toMoney($annonce->price) }}</p>
                                </div>
                                <div class="col-5 text-right">
                                    <ul>
                                    <li><a href="{{ route('dashboard.singe-ad', ['id' => $ad->id]) }}"><i
                                            class="fa fa-eye"></i></a></li>
                                     <li><a href=""><i class="fa fa-send"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
