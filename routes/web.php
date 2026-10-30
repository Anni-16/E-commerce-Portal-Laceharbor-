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


// For Admin Routes