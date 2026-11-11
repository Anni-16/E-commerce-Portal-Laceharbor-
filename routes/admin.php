<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {
        return view('backend.dashboard');
    })->name('backend.dashboard');


// Static Pages Routes

Route::get('edit-about-page', [AboutController::class, 'edit'])
    ->name('backend.edit-about-page');

Route::post('edit-about-page', [AboutController::class, 'update'])
    ->name('backend.about.update');

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

    Route::get('edit-terms-conditions-page', function () {
        return view('backend.staticpages.terms-conditions');
    })->name('backend.edit-terms-conditions-page');

    Route::get('edit-social-media-page', function () {
        return view('backend.staticpages.social-media');
    })->name('backend.edit-social-media-page');
});
