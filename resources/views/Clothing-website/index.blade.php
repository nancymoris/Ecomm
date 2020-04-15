@extends('Clothing-website.all')

@section('title','Fashion')

@section('side-header')
    @include('Clothing-website.all2')
@endsection

@section('content')
<!-- slider start -->
<div class="slider-area style-1 bg-img background-overlay" style="background-image: url(img/bg/5.jpeg);"> 
                <div class="container-fluid text-center">
                    <div class="slider-text">
                        <h2>summer Collection 2020 </h2>
                        <h3>A good looking, comfortable traditional collection</h3>
                        <a href="{{ Route('shop') }}">Shop The Collection</a>
                    </div>
                </div>
            </div>
            <!-- slider end -->

            <!-- shop area start -->
            <div class="shop-area ptb-90">
                <div class="container-fluid">		
                    <div class="shop-style-all">
                        <div class="row">
                            <div class="grid">
                                <div class="col-md-6 col-sm-6 col-xs-12 grid-item cat1">
                                    <div class="shop hover-style mb-30">
                                        <div class="shop-img">
                                            <a href="{{ Route('categories') }}#tabone">
                                                <img src="img/shop/7.jpg" alt="" />	
                                            </a>	
                                            <div class="shop-title title-style-1">
                                                <h3><a href="{{ Route('categories') }}#tabone">Clothing</a></h3>
                                                <span class="new-price">5</span>
                                                
                                            </div>
                                            
                                        </div>							
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 grid-item cat1">
                                    <div class="shop hover-style mb-30">
                                        <div class="shop-img">
                                            <a href="{{ Route('categories') }}#tabfour">
                                                <img src="img/shop/6.jpg" alt="" />
                                            </a>	
                                            <div class="shop-title title-style-1">
                                                <h3><a href="{{ Route('categories') }}#tabfour">Jewelry</a></h3>
                                                <span class="new-price">15</span>
                                                
                                            </div>
                                            
                                        </div>	
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 grid-item cat1">
                                    <div class="shop hover-style mb-30">
                                        <div class="shop-img">
                                            <a href="{{ Route('categories') }}#tabtwo">
                                                <img src="img/shop/10.jpg" alt="" />	
                                            </a>	
                                            <div class="shop-title title-style-1">
                                                <h3><a href="{{ Route('categories') }}#tabtwo">
                                                    Shoes</a></h3>
                                                <span>20</span>
                                            </div>
                                            	
                                        </div>	
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 grid-item cat1">
                                    <div class="shop hover-style mb-30">
                                        <div class="shop-img">
                                            <a href="{{ Route('categories') }}#tabthree">
                                                <img src="img/shop/17.jpg" alt="" />	
                                            </a>
                                            <div class="shop-title title-style-1">
                                                <h3><a href="{{ Route('categories') }}#tabthree">Watches</a></h3>
                                                <span>31</span>
                                            </div>
                                            	
                                        </div>	
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <div class="view-more text-center mt-30">
                        <a href="{{ Route('shop') }}">view more</a>
                    </div>
                </div>
            </div>			
            <!-- shop area end -->

            
            <!-- banner area start -->
            <div class="banner-area pb-100">
                <div class="container-fluid">
                    <div class="banner-img">
                        <img src="img/banner/1.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- banner area end -->


@endsection