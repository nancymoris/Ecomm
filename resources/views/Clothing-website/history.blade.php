@extends('Clothing-website.all')

@section('title','History')

@section('content')
         <!-- page section start -->
         <div class="shop-area ptb-90">
            <div class="container-fluid">		
                <div class="shop-style-all">
                    <h2 class="pb-30">Purchased Items</h2>
                    <div class="row">
                        <div class="grid">
                            <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                                        <div class="shop-img">
                                                <img src="{{ asset('img/shop/1.jpg') }}" alt="" />	
                                        </div>	
                                         <!-- Title -->
                                <h1 class="title">Dress</h1>
                                <!-- Price Ratting -->
                                <div class="price-ratting section">
                                    <!-- Price -->
                                    <span class="price float-left"><span class="new">€ 50.00</span></span>
                                 
                                </div>
                                <!-- Short Description -->
                                <div class="short-desc section">
                                    <h5 class="pd-sub-title">The date of purchase
                                    </h5>
                                    <p style="color: red;"><b>6-4-2019</b></p>
                                </div>						
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
                                <div class="shop-img">
                                        <img src="{{ asset('img/shop/2.jpg') }}" alt="" />	
                                </div>	
                                 <!-- Title -->
                        <h1 class="title">BEIGE TOTE</h1>
                        <!-- Price Ratting -->
                        <div class="price-ratting section">
                            <!-- Price -->
                            <span class="price float-left"><span class="new">€ 80.00</span></span>
                         
                        </div>
                        <!-- Short Description -->
                        <div class="short-desc section">
                            <h5 class="pd-sub-title">The date of purchase
                            </h5>
                            <p style="color: red;"><b>3-6-2020</b></p>
                        </div>						
                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- page section end -->



@endsection