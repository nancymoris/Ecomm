<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/Clothing-website', function () {
    return view('Clothing-website.index');
})->name('home');

Route::get('/Clothing-website/login', function () {
    return view('Clothing-website.login');
})->name('login');

Route::get('/Clothing-website/register', function () {
    return view('Clothing-website.register');
})->name('register');

Route::get('/Clothing-website/contact', function () {
    return view('Clothing-website.contact');
})->name('contact');

Route::get('/Clothing-website/shop', function () {
    return view('Clothing-website.shop');
})->name('shop');

Route::get('/Clothing-website/cart', function () {
    return view('Clothing-website.cart');
})->name('cart');

Route::get('/Clothing-website/history', function () {
    return view('Clothing-website.history');
})->name('history');

Route::get('/Clothing-website/sales', function () {
    return view('Clothing-website.sales');
})->name('sales');

Route::get('/Clothing-website/categories', function () {
    return view('Clothing-website.categories');
})->name('categories');