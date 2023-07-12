<style>
    .publish {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .publish a {
        text-align: center;
        width: 100%;
        height: 40px;
        font-size: 15px;
        background-color: #ef4836;
        border: 1px solid #ef4836;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .publish a:hover {
        background-color: inherit;
        color: #ef4836;
    }
</style>
<div class="fluid-container" id="top">
    <div class="row">
        <div class="col-md-6 col-12">
            <ul class="d-flex header-contact">

           

                <li><i class="fa fa-phone">Tel:<a href="https://web.whatsapp.com/send?phone=237672044430">+237 672 044 430</a href></i></li>

                <li><i class="fa fa-envelope"><a href="mailto:tegonguefolefackf@gmail.com">tegonguefolefackf@gmail.com</a href></i></li>
            </ul>
        </div>
        <div class="col-md-6 col-12">
            <ul class="d-flex account_login-area">
                <li>
                    <form>
                        <select id="lang-switch">
                            <option value="en">
                                <span class="fi fi-us"></span>
                            </option>
                            <option value="ko" selected>
                                <span class="fi fi-fr"></span>
                            </option>
                        </select>
                    </form>
                </li>
                <li><a href="{{ route('auth.login') }}"> Login/Register </a></li>
                <div class="publish">
                    <a id="publish-button" href="">Publish</a>
                </div>
            </ul>
        </div>
    </div>
</div>
