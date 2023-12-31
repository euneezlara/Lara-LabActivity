<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/about', function () {
    return view('about');
});

Route ::get('/contactus', function () {
    return view('contactus');
});

// Additional 5 Features

Route ::get('/product', function () {
    return view('product');
});

Route ::get('/feedback', function () {
    return view('feedback');
});

Route ::get('/cart', function () {
    return view('cart');
});

Route ::get('/checkout', function () {
    return view('checkout');
});

Route ::get('/history', function () {
    return view('history');
});




