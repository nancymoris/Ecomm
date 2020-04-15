@extends('Clothing-website.all')

@section('title','Fashion')

@section('side-header')
    @include('Clothing-website.all2')
@endsection

@section('content')
            <!-- breadcrumb start -->
            <div class="breadcrumb-area">
                <div class="container-fluid text-center">
                    <div class="breadcrumb-stye gray-bg ptb-100">
                        <h2 class="page-title">cart page</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">shop</a></li>
                            <li class="active">cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->
            <!-- shopping-cart-area start -->
            <div class="cart-main-area ptb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Cart</h1>
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">remove</th>
                                                <th class="product-price">images</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="{{ asset('img/cart/1.jpg') }}" alt="" width="100px" height="88px"></a>
                                                </td>
                                                <td class="product-name"><a href="#">Sun Glasses</a></td>
                                                <td class="product-price"><span class="amount">$60.00</span></td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal">$60.00</td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="{{ asset('img/cart/2.jpg') }}" alt="" width="100px" height="88px"></a>
                                                </td>
                                                <td class="product-name"><a href="#">Classic Watch</a></td>
                                                <td class="product-price"><span class="amount">$30.00</span></td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal">$30.00</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="coupon-all">
                                           
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-7 col-sm-12 col-xs-12">
                                        <div class="cart-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal<span>90.00</span></li>
                                                <li>Total<span>90.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shopping-cart-area end -->



@endsection