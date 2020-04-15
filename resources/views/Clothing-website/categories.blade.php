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
                        <h2 class="page-title">product details</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li class="active">product details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->

            
            <!-- page section start -->
            <div class="page-section section ptb-100">
                <div class="container-fluid">
                    <div class="row mb-60">
						<div class="row mb-40">
							<div class="col-xs-5 user">
								<div class="col-xs-3 user">
											<a href="#" data-toggle="modal" data-target="#AddCategoryModal"><i class="pe-7s-plus"></i></a>
								</div>
								<div class="col-xs-1 user">
											<a href="#" data-toggle="modal" data-target="#DeleteModal"><i class="pe-7s-trash"></i></a>
								</div>
								<div class="col-xs-1 user"> 
											<a href="#" data-toggle="modal" data-target="#EditModal"><i class="pe-7s-edit"></i></a>
								</div>
							</div>
							<div class="col-xs-7">                   
                                <ul class="nav nav-tabs" role="tablist">

                                    <li role="presentation" class="active">
                                        <a href="#tabone" aria-controls="tabone" role="tab" data-toggle="tab"> Clothing <span id="nofprod"> (6)</span>
                                        </a></li>
                                    <li role="presentation">
                                        <a href="#tabtwo"  aria-controls="tabone" role="tab" data-toggle="tab">Shoes <span id="nofprod"> (3)</span>
                                        </a></li>
                                    <li role="presentation">
                                        <a href="#tabthree" aria-controls="tabone" role="tab" data-toggle="tab">Watches <span id="nofprod"> (2)</span>
                                        </a></li>
                                    <li role="presentation">
                                        <a href="#tabfour" aria-controls="tabone" role="tab" data-toggle="tab" >Jewelry <span id="nofprod"> (4)</span>
                                        </a></li>

                                </ul>
							</div>
				   	  </div>	
                   <!-- Tab panes -->
        <div class="tab-content col-xs-12">
            <div role="tabpanel" class="pro-info-tab tab-pane fade in active"  id="tabone" >
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/1.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Dress</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 50.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (4)</span> </p>
                            </div>
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>   
                
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/2.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Beige Tote</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 80.00</span></span>
                             
                            </div>
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (6)</span> </p>
                            </div>
                            <!-- Product Size -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
						
                        </div>
                    </div>
                </div> 

                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/3.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">classic T-shirt</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 90.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (3)</span> </p>
                            </div>
                            <!-- Product Size -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div> 

                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/7.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Short Blouse</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 80.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (5)</span> </p>
                            </div>
                            <!-- Product Size -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div> 

                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/12.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Short Blouse</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 80.00</span></span>
                             
                            </div>
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (4)</span> </p>
                            </div>
                            <!-- Product Size -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div> 

                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/13.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Short Dress</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 50.00</span></span>
                             
                            </div>
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (4)</span> </p>
                            </div>
                            <!-- Product Size -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div> 
            
            </div>
            <div role="tabpanel" class="pro-info-tab tab-pane fade"   id="tabtwo" >
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/4.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Boot</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 40.00</span></span>
                             
                            </div>
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (2)</span> </p>
                            </div>
                              
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>
                
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/10.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Heel</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 20.00</span></span>
                             
                            </div>
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (4)</span> </p>
                            </div>
                              <!-- Product Size -->
                              
                       
                            <!-- Product Color -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div> 

                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/15.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">classic Shoes</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 30.00</span></span>
                             
                            </div>
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (6)</span> </p>
                            </div>
                            <!-- Product Size -->
                            
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div> 
            </div>
            <div  role="tabpanel" class="pro-info-tab tab-pane fade"   id="tabthree">

                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/16.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">classic watch</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 30.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (3)</span> </p>
                            </div>
                          
                          
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>
            
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/17.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">classic watch</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 30.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (5)</span> </p>
                            </div>
                        
                          
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>
            
            </div>
            <div  role="tabpanel" class="pro-info-tab tab-pane fade"   id="tabfour" >
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/5.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Hair Style</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 50.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (4)</span> </p>
                            </div>
                              <!-- Product Color -->
                              
                          
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/6.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Sun Glasses</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 60.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (2)</span> </p>
                            </div>
                        
                          
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/8.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Leather Bag</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 90.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (4)</span> </p>
                            </div>
                         <!-- Product Color -->
                         
                          
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>
                <div class="row mb-40">
                    <div class="col-md-5 col-sm-6 col-xs-12 mb-40">	
                        <!-- Tab panes -->
                        <div class="tab-content mb-10">
                            <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                                <img src="{{ asset('img/product/9.jpg') }}" alt="" />
                            </div>
                     
                        </div>
                       
                    </div>
                    <!-- QuickView Product Details -->
                    <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                        <div class="product-details section">
                            <!-- Title -->
                            <h1 class="title">Mens Belt</h1>
                            <!-- Price Ratting -->
                            <div class="price-ratting section">
                                <!-- Price -->
                                <span class="price float-left"><span class="new">€ 70.00</span></span>
                             
                            </div>
                            <!-- Short Description -->
                            <div class="short-desc section">
                                <h5 class="pd-sub-title">Quick Overview</h5>
                                <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani nab majorit.<br><br> Remaining  peices : <span id=" remain_p" style="color: blue;"> (3)</span> </p>
                            </div>
                        
                          
                            <!-- Quantity Cart -->
                            <div class="quantity-cart section">
                                <div class="product-quantity2">
                                    <input type="text" value="0" id="numOfpeice">
                                </div>
                                <button class="add-to-cart" id="addcart">add to cart</button>
                            </div>
							<!-- delet and edit-->
								<div class="del_edit" >
									<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditProdModal"> <i class="pe-7s-edit"></i></button>
                               
									<button type="button" class="btn btn-danger"><i class="pe-7s-trash"></i></button>
								</div>
                            <!--end -->
                    
                        </div>
                    </div>
                </div>

            </div>
        </div>
                    
                    
                    
                    
                    </div>
                        </div>
            </div>
            <!-- page section end -->



@endsection