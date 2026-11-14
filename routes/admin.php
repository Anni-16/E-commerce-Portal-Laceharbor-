<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Backend\ReturnsController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PrivacyController;
use App\Http\Controllers\Backend\TermsController;
use App\Http\Controllers\Backend\SocialMediaController;

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

    // Returns & Exchanges Page
    Route::get('edit-returns-exchanges-page', [ReturnsController::class, 'edit'])
        ->name('backend.edit-returns-exchanges-page');
    Route::put('returns-exchanges/update', [ReturnsController::class, 'update'])
        ->name('backend.returns-exchanges.update');

    // Contact Us Page
    Route::get('edit-contact-us-page', [ContactController::class, 'edit'])
        ->name('backend.edit-contact-us-page');
    Route::put('contact-us/update', [ContactController::class, 'update'])
        ->name('backend.contact-us.update');

    // Privacy Policy Page
    Route::get('edit-privacy-policy-page', [PrivacyController::class, 'edit'])
        ->name('backend.edit-privacy-policy-page');
    Route::put('privacy-policy/update', [PrivacyController::class, 'update'])
        ->name('backend.privacy-policy.update');

    // Terms and Conditions Page
    Route::get('edit-terms-conditions-page', [TermsController::class, 'edit'])
        ->name('backend.edit-terms-conditions-page');
    Route::put('terms-conditions/update', [TermsController::class, 'update'])
        ->name('backend.terms-conditions.update');

    // Social Media Page
    Route::get('edit-social-media-page', [SocialMediaController::class, 'edit'])
        ->name('backend.edit-social-media-page');
    Route::put('social-media/update', [SocialMediaController::class, 'update'])
        ->name('backend.social-media.update');

});
