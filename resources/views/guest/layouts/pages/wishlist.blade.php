@extends('guest.layouts.layout')

@section("content")
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
                                    <th class="stock">Stock Stutus </th>
                                    <th class="addcart">Contact seller</th>
                                    <th class="remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="images"><img src="assets/images/cart/4.jpg" alt=""></td>
                                    <td class="product"><a href="single-product.html">Coconut Oil</a></td>
                                    <td class="ptice">$139.00</td>
                                    <td class="stock">In Stock</td>
                                    <td class="addcart"><a href="{{ route('chat') }}">Contact seller</a></td>
                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                                <tr>
                                    <td class="images"><img src="assets/images/cart/1.jpg" alt=""></td>
                                    <td class="product"><a href="single-product.html">Pure Nature Honey</a></td>
                                    <td class="ptice">$684.47</td>
                                    <td class="stock"><span>Out Stock</span></td>
                                    <td class="addcart"><a href="{{ route('chat') }}">Contact seller</a></td>
                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                                <tr>
                                    <td class="images"><img src="assets/images/cart/5.jpg" alt=""></td>
                                    <td class="product"><a href="single-product.html">Olive Oil</a></td>
                                    <td class="ptice">$145.80</td>
                                    <td class="stock">In Stock</td>
                                    <td class="addcart"><a href="{{ route('chat') }}">Contact seller</a></td>
                                    <td class="remove"><i class="fa fa-times"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
