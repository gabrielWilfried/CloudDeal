<style>
   .publish{
    display: flex;
    justify-content: center;
    align-items: center;
   }
   .publish a{
        text-align: center;
        width: 100%;
        height: 40px;
        font-size: 15px;
        background-color: #ef4836;
        border:1px solid #ef4836;
        color:white;
        padding: 5px 10px;
        border-radius: 15%
    }
    .publish a:hover{
        background-color: inherit;
        color: #ef4836;
    }
</style>
<div class="fluid-container">
    <div class="row">
        <div class="col-md-6 col-12">
            <ul class="d-flex header-contact">
                <li><i class="fa fa-phone"></i> +01 123 456 789</li>
                <li><i class="fa fa-envelope"></i> youremail@gmail.com</li>
            </ul>
        </div>
        <div class="col-md-6 col-12">
            <ul class="d-flex account_login-area">
                <li>
                    <a href="javascript:void(0);"><i class="fa fa-user"></i> My Account <i
                            class="fa fa-angle-down"></i></a>
                    <ul class="dropdown_style">
                        <li><a href="{{ route('auth.login') }}">Login</a></li>
                        <li><a href="{{ route('auth.register') }}">Register</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('auth.register') }}"> Login/Register </a></li>
                <div class="publish">
                    <a id="publish-button" href="">Publish</a>
                </div>
            </ul>
        </div>
    </div>
</div>
