<div class="fluid-container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Our Latest Product</h2>
                <img src="{{asset('assets/images/section-title.png')}}" alt="">
            </div>
        </div>
    </div>
    <ul class="row">
        @foreach ($allAds as $all)
            <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="product-wrap">
                    <div class="product-img">
                        <span>Sale</span>
                        <img src="assets/images/product/15.jpg" alt="">
                        <div class="product-icon flex-style">
                            <ul>
                                <li><li><a href="{{ route('dashboard.singe-ad') }}"><i class="fa fa-eye"></i></a></li>
                                <li><a href="{{ route('dashboard.singe-ad') }}"><i class="fa fa-send"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="single-product.html">{{ $all->name }}</a></h3>
                        <p class="pull-left">
                            {{ $all->price }}
                        </p>
                    </div>
                </div>
            </li>
        @endforeach
        <li class="col-12 text-center">
            <a class="loadmore-btn" href="javascript:void(0);">Load More</a>
        </li>
    </ul>
</div>
