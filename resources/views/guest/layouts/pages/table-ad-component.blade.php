<div class="tab-pane active" id="grid">

    <ul class="row">
        <template x-for="ad in data.annonces.data">
            <li class="col-lg-4 col-sm-6 col-12">
                <div class="product-wrap">
                    <div class="product-img">
                        <span>New</span>
                        <img src="{{ asset('assets/images/product/1.jpg') }}" alt="">
                        <div class="product-icon flex-style">
                            <ul>
                                <li><a :href="ad.url_detail"><i class="fa fa-eye"></i></a></li>
                                <li><a href="{{ route('chat.index') }}"><i class="fa fa-send"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a :href="ad.url_detail" x-text="ad.name"></a></h3>
                        <p class="pull-left" x-text="ad.format_price">
                        </p>
                    </div>
                </div>
            </li>
        </template>
    </ul>


</div>