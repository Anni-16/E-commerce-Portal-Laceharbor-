<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {
        return view('backend.dashboard');
    })->name('backend.dashboard');

    Route::get('edit-about-page', function () {
        return view('backend.staticpages.about');
    })->name('backend.edit-about-page');

    Route::get('edit-shipping-delivery-page', function () {
        return view('backend.staticpages.shipping-delivery');
    })->name('backend.edit-shipping-delivery-page');

    Route::get('edit-returns-exchanges-page', function () {
        return view('backend.staticpages.returns-exchanges');
    })->name('backend.edit-returns-exchanges-page');

    Route::get('edit-contact-us-page', function () {
        return view('backend.staticpages.contact-us');
    })->name('backend.edit-contact-us-page');

    Route::get('edit-privacy-policy-page', function () {
        return view('backend.staticpages.privacy-policy');
    })->name('backend.edit-privacy-policy-page');
});
