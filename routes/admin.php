<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ShippingController;

Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {
        return view('backend.dashboard');
    })->name('backend.dashboard');


    // Static Pages Routes
    
    // About Page
    Route::get('edit-about-page', [AboutController::class, 'edit'])
        ->name('backend.edit-about-page');
    Route::put('about/update', [AboutController::class, 'update'])
        ->name('backend.about.update');

    // Shipping & Delivery Page
    Route::get('edit-shipping-delivery-page', [ShippingController::class, 'edit'])
        ->name('backend.edit-shipping-delivery-page');
    Route::put('shipping-delivery/update', [ShippingController::class, 'update'])
        ->name('backend.shipping-delivery.update');


    Route::get('edit-returns-exchanges-page', function () {
        return view('backend.staticpages.returns-exchanges');
    })->name('backend.edit-returns-exchanges-page');

    Route::get('edit-contact-us-page', function () {
        return view('backend.staticpages.contact-us');
    })->name('backend.edit-contact-us-page');

    Route::get('edit-privacy-policy-page', function () {
        return view('backend.staticpages.privacy-policy');
    })->name('backend.edit-privacy-policy-page');

    Route::get('edit-terms-conditions-page', function () {
        return view('backend.staticpages.terms-conditions');
    })->name('backend.edit-terms-conditions-page');

    Route::get('edit-social-media-page', function () {
        return view('backend.staticpages.social-media');
    })->name('backend.edit-social-media-page');
});
