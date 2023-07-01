<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="newsletter text-center">
                <h3>Subscribe  Newsletter</h3>
                <div class="newsletter-form">
                    <form method="POST" name="newsletter-form" onsubmit="event.preventDefault()" action="{{ route('home') }}">
                        @csrf
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address...">
                        <button type="submit"><i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .error{
        color: red;
    }
</style>
