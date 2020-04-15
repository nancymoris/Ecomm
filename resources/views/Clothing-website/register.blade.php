@extends('Clothing-website.all')

@section('title','Clothing-website | Register')

@section('content')
            <!-- breadcrumb start -->
            <div class="breadcrumb-area">
                <div class="container-fluid text-center">
                    <div class="breadcrumb-stye gray-bg ptb-100">
                        <h2 class="page-title">register page</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li class="active">register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- breadcrumb end -->

            <!-- register-area start -->
            <div class="register-area ptb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 col-lg-offset-4">
                            <div class="login">
                                <div class="login-form-container">
                                    <div class="login-text">
                                        <h2>Register</h2>
                                        <span>Please Register using account detail bellow.</span>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <input name="user-email" placeholder="Email" type="email">
                                            <div class="button-box">
                                                <button type="submit" class="default-btn floatright">Register</button>
                                                <p style=" float: right;">Have account ? <a href="{{ Route('login') }}"><span style="color: blue;">log in</span></a></p>

                                            </div>
                                           
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- register-area end -->



@endsection