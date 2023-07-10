<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Categories</h2>
                <img src="assets/images/section-title.png" alt="">
            </div>
        </div>
        <div class="col-12">
            <div class="featured-active2 owl-carousel next-prev-style">
                @forelse ($categories as $category)
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="assets/images/featured/6.jpg" alt="">
                            <div class="featured-content">
                                <a id="category-link" href="{{ route('dashboard.index', ['category_id' => $category->id]) }}" style="text-transform: capitalize">{{ $category->name }}</a> 
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Category</p>
                @endforelse
            </div>
        </div>
    </div>
</div>


