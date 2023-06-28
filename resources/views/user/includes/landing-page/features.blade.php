<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="featured-active2 owl-carousel next-prev-style">
                @foreach ($categories as $category)
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="assets/images/featured/6.jpg" alt="">
                            <div class="featured-content">
                                <a href="shop.html">{{ $category->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
