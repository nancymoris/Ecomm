<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shortcodes/shortcode.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
    
        
        <div class="waraper">
              <!-- ## Header ## -->
              <header>
                <div class="header-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-lg-3  col-sm-4 col-xs-4">
                                
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-2 col-xs-2 text-center">
                                <div class="main-menu display-inline">
                                    <nav>
                                        <ul class="menu">
                                            <li><a href="{{ Route('home') }}">HOME <i class="pe-7s-angle-down"></i></a></li>
                                            <li><a href="#">pages <i class="pe-7s-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ Route('shop') }}">shop</a></li>
                                                    <li><a href="{{ Route('cart') }}">cart</a></li>
                                                    <li><a href="{{ Route('categories') }}">Categories</a></li>
                                                    <li><a href="{{ Route('contact') }}">contact us</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="{{ Route('shop') }}">shop</a></li>
                                          
                                            <li><a href="{{ Route('contact') }}">CONTACT</a></li>

                                            <li><a href="{{ Route('sales') }}">Statistic</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 text-right text-sm text-res">
                                    @yield('side-header')
                                    <div class="user">
                                        <a href="#" data-toggle="modal" data-target="#loginModal"><i class="pe-7s-add-user"></i></a>
                                    </div>

                            </div>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </header>
            <!-- header end -->






        @yield('content')



           
            <!-- footer area start -->
            <footer class="footer-area">
                <div class="container-fluid">
                    <div class="row">

                                <div class="col-md-3 col-sm-6">
                                    <div class="footer-title res-mrg">
                                        <h3>categories</h3>
                                        <div class="footer-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ Route('categories') }}#tabone"  style="margin-right: 100px;">
                                                    <img src="{{ asset('img/logo/1.png') }}" style="display: inline-block; position: absolute; left: -15px;"> Clothing <span id="nofprod"> (6)</span>
                                                  </a>
                                            </li>
                                            <li>
                                               <a href="{{ Route('categories') }}#tabtwo" style="margin-right: 100px;">
                                                <img src="{{ asset('img/logo/2.png') }}" style="display: inline-block; position: absolute; left: -15px;"> Shoes <span id="nofprod"> (3)</span>
                                               </a>
                                            </li>
                                            <li>
                                               <a href="{{ Route('categories') }}#tabthree"  style="margin-right: 100px;">
                                                <img src="{{ asset('img/logo/3.png') }}" style="display: inline-block; position: absolute; left: -15px;">Watches <span id="nofprod"> (2)</span>
                                               </a>
                                            </li>
                                            <li>
                                                <a href="{{ Route('categories') }}#tabfour"  style="margin-right: 100px;">
                                                    <img src="{{ asset('img/logo/4.png') }}" style="display: inline-block; position: absolute; left: -15px;">Jewelry <span id="nofprod"> (4)</span>
                                                </a>
                                             </li>
                                        </ul>
                                         </div>
                                    </div>
                                 </div>

                                 <div class="col-md-3 col-sm-6">
                                    <div class="footer-title res-mrg">
                                        <h3>Support</h3>
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Sale products</a></li>
                                                <li><a href="#">Terms & Condition</a></li>
                                                <li><a href="#">Delivery Inforamtion</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="footer-title res-mrg">
                                        <h3>Quick Links</h3>
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="{{ Route('login') }}">Login</a></li>
                                                <li><a href="{{ Route('cart') }}">My Cart</a></li>
                                                <li><a href="{{ Route('shop') }}">Shop</a></li>
                                                <li><a href="{{ Route('home') }}">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>        
                        
                        
                       
                        <div class="col-md-3 col-sm-12">
                            <div class="footer-title res-mrg-2">
                                <h3>newsletter</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="footer-bottom text-center ptb-20">
                        <p>
                            © 2020
                            . All Rights Reserved.
                        </p>
                    </div>
                </div>
            </footer>
            <!-- footer area end -->

            <!-- loginModal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>login</h2>
                                        <span>Please login using account detail bellow.</span>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" id="remember">
                                                    <label for="remember">Remember me</label>
                                                    <a href="#">Forgot Password?</a><br>
                                                    <p style=" float: right;">Create new account <a href="{{ Route('register') }}"><span style="color: blue;">register now</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- loginModal end -->

            			<!-- AddCategoryModal -->
                        <div class="modal fade" id="AddCategoryModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Add Category</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
                                            <input type="text" name="category-name" placeholder="Category Name">
                                            <input type="password" name="category-id" placeholder="Category Id">
											<input type="file"  placeholder="choose category image">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <p style=" float: right;">Add new Product <a href="#" data-toggle="modal" data-target="#AddProdModal"><span style="color: blue;">Add Product</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Add Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AddCategoryModalModal end -->
			
			<!-- AddProdModal -->
            <div class="modal fade" id="AddProdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Add Prodcut</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
											<div class="form-group">
												<label for="formGroupExampleInput">Product Name</label>
												<input type="text" name="product-name" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Id</label>
												<input type="text" name="product-id" class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Id">
											 </div>
                                            <div class="form-group">
												<label for="formGroupExampleInput">Product Price</label>
												<input type="text" name="product-price" class="form-control" id="formGroupExampleInput3" placeholder="Enter Product Price">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Quantity</label>
												<input type="text" name="product-quantity" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Quantity">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Description</label>
												<input type="text" name="product-description" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Description">
											 </div>
                                             <div class="form-group">
												<label for="formGroupExampleInput2">Product Category</label>
												<select class="form-control category_list" name="category_id">
													<option value="">Select Category</option>
													<option value="">Clothing</option>
													<option value="">Shoes</option>
													<option value="">Jewelry</option>
													<option value="">Watches</option>
												</select>
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Image</label>
												<input type="file" name="product-image" class="form-control" id="formGroupExampleInput5" placeholder="Enter Product Image">
											 </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <p style=" float: right;">Add new Category <a href="#" data-toggle="modal" data-target="#AddCategoryModal"><span style="color: blue;">Add Category</span></a></p>
                                                </div>
                                                <button type="submit" class="default-btn floatright">Add Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AddProdModal end -->

            			<!-- DeleteModal -->
                        <div class="modal fade mymodal" id="DeleteModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Delete Category</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
											<div class="form-group">
												<label for="formGroupExampleInput">Enter Deleted Category Name</label>
												<input type="text" name="product-name" class="form-control"  placeholder="Enter Name...">
											 </div>
											<div class="form-group">
												<label for="formGroupExampleInput">Enter Deleted Category Id</label>
												<input type="text" name="product-id" class="form-control"  placeholder="Enter Id...">
											 </div>
                                            <div class="button-box text-center">
                                                <button type="submit" class="default-btn ">Delete Category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DeleteModal end -->
			
			<!-- EditModal -->
            <div class="modal fade mymodal" id="EditModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Edit Category</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
											<div class="form-group">
												<label for="formGroupExampleInput">Enter Category Id</label>
												<input type="text" name="product-id" class="form-control"  placeholder="Enter Id..">
											 </div>
											 <div class="button-box text-center">
                                                <button type="search" class="default-btn" id="search">Search</button>
                                            </div>
											<div class="form-group">
												<label for="formGroupExampleInput">Edit Category Name</label>
												<input type="text" name="product-name" class="form-control"  placeholder="Name">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput">Edit Category Identification Image</label>
												<input type="file" name="product-image" class="form-control"  placeholder="Choose Image...">
											 </div>
                                            <div class="button-box text-center">
                                                <button type="submit" class="default-btn ">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EditModal end -->
             <!-- EditProdModal -->
            <div class="modal fade" id="EditProdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Edit Prodcut</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
											<div class="form-group">
												<label for="formGroupExampleInput">Product Name</label>
												<input type="text" name="product-name" class="form-control" id="formGroupExampleInput" placeholder="Enter Product Name">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Id</label>
												<input type="text" name="product-id" class="form-control" id="formGroupExampleInput2" placeholder="Enter Product Id">
											 </div>
                                            <div class="form-group">
												<label for="formGroupExampleInput">Product Price</label>
												<input type="text" name="product-price" class="form-control" id="formGroupExampleInput3" placeholder="Enter Product Price">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Quantity</label>
												<input type="text" name="product-quantity" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Quantity">
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Description</label>
												<input type="text" name="product-description" class="form-control" id="formGroupExampleInput4" placeholder="Enter Product Description">
											 </div>
                                             <div class="form-group">
												<label for="formGroupExampleInput2">Product Category</label>
												<select class="form-control category_list" name="category_id">
													<option value="">Select Category</option>
													<option value="">Clothing</option>
													<option value="">Shoes</option>
													<option value="">Jewelry</option>
													<option value="">Watches</option>
												</select>
											 </div>
											 <div class="form-group">
												<label for="formGroupExampleInput2">Product Image</label>
												<input type="file" name="product-image" class="form-control" id="formGroupExampleInput5" placeholder="Enter Product Image">
											 </div>
                                             <div class="button-box text-center">
                                                <button type="submit" class="default-btn ">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EditProdModal end -->
        </div>
        
        
        
        
     
        
        
        
        
        
        
        
        

        <!-- all js here -->
        <script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/ajax-mail.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
