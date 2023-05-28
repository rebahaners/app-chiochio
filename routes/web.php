<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// navbar-route

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about-us', [
        "title" => "ABOUT US"
    ]);
});

Route::get('/shop', function () {
    return view('shop', [
        "title" => "SHOP PAGES"
    ]);
});

Route::get('/blog', function () {
    return view('blog-left-sidebar', [
        "title" => "BLOG PAGE"
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

// navbar-route-end

Route::get('/single-product', function () {
    return view('product-details');
});