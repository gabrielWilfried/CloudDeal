@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')

    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="http://themepresss.com/tf/html/tohoney/cart">
                        <table class="table-responsive cart-wrap">
                            <thead>
                                <tr>
                                    <th class="images">Image</th>
                                    <th class="product">Product</th>
                                    <th class="ptice">Price</th>
                                    <th class="quantity">Quantity</th>

                                    <th class="remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="images"><img src="{{ asset('assets/images/cart/1.jpg') }}" alt=""></td>
                                    <td class="product"><a href="single-product.html">Neture Honey</a></td>
                                    <td class="ptice">$139.00</td>
                                    <td class="quantity cart-plus-minus">
                                        <input type="text" value="1" />
                                    </td>

                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                                <tr>
                                    <td class="images"><img src="{{ asset('assets/images/cart/2.jpg') }}" alt=""></td>
                                    <td class="product"><a href="single-product.html">Pure Olive Oil</a></td>
                                    <td class="ptice">$684.47</td>
                                    <td class="quantity cart-plus-minus">
                                        <input type="text" value="1" />
                                    </td>

                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                                <tr>
                                    <td class="images"><img src="{{ asset('assets/images/cart/3.jpg') }}" alt=""></td>
                                    <td class="product"><a href="single-product.html">Pure Coconut Oil</a></td>
                                    <td class="ptice">$145.80</td>
                                    <td class="quantity cart-plus-minus">
                                        <input type="text" value="1" />
                                    </td>

                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mt-60">
                            <div class="col-xl-10 col-lg-10 col-md-10 ">
                                <div class="cartcupon-wrap text-right">

                                    <h3>Publish</h3>
                                    <p>Wish to publish a new product?</p>
                                    <div class="cupon-wrap">

                                        <button>Publish</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
