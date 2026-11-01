<?php

use Illuminate\Support\Facades\Route;

// For Fornt End Routes
Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about-us');

Route::get('/new-arrivals', function () {
    return view('frontend.arrivals');
})->name('new-arrivals');

Route::get('/product-category', function () {
    return view('frontend.product-category');
})->name('product-category');

Route::get('/track-order', function () {
    return view('frontend.track-order');
})->name('track-order');

Route::get('/returns-exchange', function () {
    return view('frontend.returns');
})->name('returns-exchange');

Route::get('/size-guide', function () {
    return view('frontend.size-guide');
})->name('size-guide');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/contact-us', function () {
    return view('frontend.contact');
})->name('contact-us');

Route::get('/sale', function () {
    return view('frontend.sale');
})->name('sale');

Route::get('/accessories', function () {
    return view('frontend.accessories');
})->name('accessories');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/forget-password', function () {
    return view('frontend.forget-password');
})->name('forget-password');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('/products-details', function () {
    return view('frontend.products-details');
})->name('products-details');

Route::get('/products', function () {
    return view('frontend.products');
})->name('products');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/terms-conditions', function () {
    return view('frontend.terms-conditions');
})->name('terms-conditions');

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
})->name('wishlist');

// For Admin Routes
require base_path('routes/admin.php');
