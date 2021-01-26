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

Route::get('/', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('feedback');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/post', function () {
    return view('article');
});

