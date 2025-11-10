<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/service-page', function () {
    return view('servicePage');
})->name('servicePage');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-page', function () {
    return view('blogPage');
})->name('blogPage');

Route::get('/dostavka-i-oplata', function () {
    return view('dostavka-i-oplata');
})->name('dostavka-i-oplata');

Route::get('/comparison', function () {
    return view('sravnenie');
})->name('sravnenie');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/single-product', function () {
    return view('single-product');
})->name('single-product');
