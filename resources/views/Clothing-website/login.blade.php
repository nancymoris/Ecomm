@extends('Clothing-website.all')

@section('title','Clothing-website | Login')

@section('content')
            <!-- breadcrumb start -->
            <div class="breadcrumb-area">
                <div class="container-fluid text-center">
                    <div class="breadcrumb-stye gray-bg ptb-100">
                        <h2 class="page-title">login page</h2>
                        <ul>
                            <li><a href="{{ Route('home') }}">home</a></li>
                            <li class="active">login</li>
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
                                        <h2>login</h2>
                                        <span>Please login using account detail bellow.</span>
                                    </div>
                                    <div class="login-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label for="remember">Remember me</label>
                                                    <a href="#">Forgot Password?</a>
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
            <!-- register-area end -->


@endsection