<div class="tab-pane product-list" id="list">

    <ul class="row">
        <template x-for="ad in data.annonces.data">
            <li class="col-12">
                <div class="product-wrap">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="product-img">
                                <span>New</span>
                                <img src="{{ asset('assets/images/product/19.jpg') }}" alt="">
                                <div class="product-icon flex-style">
                                    <ul>
                                        <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                href="javascript:void(0);"><i class="fa fa-eye"></i></a>
                                        </li>
                                        <li><a href="{{ route('wishlist') }}"><i class="fa fa-heart"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">

                            <div class="product-content">
                                <div class="product-text fix">
                                    <h3><a :href="ad.url_detail" x-text="ad.name"></p></a></h3>
                                    <span class="pull-left" x-text="ad.format_price"></span>

                                </div>
                                <p x-text="ad.description"></p>
                                <ul class="cart-btn">
                                    <li><a href="{{ route('chat.index') }}">Contact Seller</a></li>
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </li>
        </template>
    </ul>

</div>