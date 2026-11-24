<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Backend\ReturnsController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PrivacyController;
use App\Http\Controllers\Backend\TermsController;
use App\Http\Controllers\Backend\SocialMediaController;
use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\FAQCategoryController;
use App\Http\Controllers\Backend\FAQController;
use App\Http\Controllers\Backend\GtmTagController;
use App\Http\Controllers\Backend\MetaSeoController;
use App\Http\Controllers\Backend\StateController;

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

    // Manage Banner Pages Routes
    Route::get('manage-banner', [BannerController::class, 'index'])
        ->name('backend.manage-banner');
    Route::get('/add-banner', [BannerController::class, 'addBanner'])
        ->name('backend.add-banner');
    Route::post('/store-banner', [BannerController::class, 'storeBanner'])
        ->name('backend.store-banner');
    Route::get('/view-banner/{id}', [BannerController::class, 'viewBanner'])
        ->name('backend.view-banner');
    Route::get('/edit-banner/{id}', [BannerController::class, 'editBanner'])
        ->name('backend.edit-banner');
    Route::put('/update-banner/{id}', [BannerController::class, 'updateBanner'])
        ->name('backend.update-banner');
    Route::delete('/delete-banner/{id}', [BannerController::class, 'deleteBanner'])
        ->name('backend.delete-banner');


    // Manage Blogs Pages Routes
    Route::get('/manage-blogs', [BlogsController::class, 'index'])
        ->name('backend.manage-blogs');
    Route::get('/view-blog/{id}', [BlogsController::class, 'viewBlog'])
        ->name('backend.view-blog');
    Route::get('/add-blog', [BlogsController::class, 'addBlog'])
        ->name('backend.add-blog');
    Route::post('/store-blog', [BlogsController::class, 'storeBlog'])
        ->name('backend.store-blog');
    Route::get('/edit-blog/{id}', [BlogsController::class, 'editBlog'])
        ->name('backend.edit-blog');
    Route::put('/update-blog/{id}', [BlogsController::class, 'updateBlog'])
        ->name('backend.update-blog');
    Route::delete('/delete-blog/{id}', [BlogsController::class, 'deleteBlog'])
        ->name('backend.delete-blog');

    // Manage FAQ's Categories Pages Routes
    Route::get('/manage-faq-categories', [FAQCategoryController::class, 'index'])
        ->name('backend.manage-faq-categories');
    Route::post('/faq-categories', [FAQCategoryController::class, 'store'])
        ->name('backend.faq-categories.store');
    Route::put('/faq-categories/{id}', [FAQCategoryController::class, 'update'])
        ->name('backend.faq-categories.update');
    Route::delete('/faq-categories/{id}', [FAQCategoryController::class, 'destroy'])
        ->name('backend.faq-categories.destroy');


    // Manage FAQ'S Pages Routes
    Route::get('/manage-faq', [FAQController::class, 'index'])
        ->name('backend.manage-faq');
    Route::get('/view-faq/{id}', [FAQController::class, 'viewFaq'])
        ->name('backend.view-faq');
    Route::get('/add-faq', [FAQController::class, 'addFaq'])
        ->name('backend.add-faq');
    Route::post('/store-faq', [FAQController::class, 'storeFaq'])
        ->name('backend.store-faq');
    Route::get('/edit-faq/{id}', [FAQController::class, 'editFaq'])
        ->name('backend.edit-faq');
    Route::put('/update-faq/{id}', [FAQController::class, 'updateFaq'])
        ->name('backend.update-faq');
    Route::delete('/delete-faq/{id}', [FAQController::class, 'deleteFaq'])
        ->name('backend.delete-faq');


    // Manage SEO Setting
    // All Pages SEO
    Route::get('edit-all-pages-seo', [MetaSeoController::class, 'edit'])
        ->name('backend.edit-all-pages-seo');
    Route::put('meta-seo/update', [MetaSeoController::class, 'update'])
        ->name('backend.meta-seo.update');
    // GTM Tag
    Route::get('edit-gtm-tag', [GtmTagController::class, 'edit'])
        ->name('backend.edit-gtm-tag');
    Route::put('gtm-tag/update', [GtmTagController::class, 'update'])
        ->name('backend.gtm-tag.update');


    // Manage Website Setting Pages Routes
    // For country
    Route::get('/manage-country', [CountryController::class, 'index'])
        ->name('backend.manage-country');
    Route::post('/manage-country', [CountryController::class, 'store'])
        ->name('backend.manage-country.store');
    Route::put('/manage-country/{id}', [CountryController::class, 'update'])
        ->name('backend.manage-country.update');
    Route::delete('/manage-country/{id}', [CountryController::class, 'destroy'])
        ->name('backend.manage-country.destroy');
    // For State
    Route::get('/manage-state', [StateController::class, 'index'])
        ->name('backend.manage-state');
    Route::post('/manage-state', [StateController::class, 'store'])
        ->name('backend.manage-state.store');
    Route::put('/manage-state/{id}', [StateController::class, 'update'])
        ->name('backend.manage-state.update');
    Route::delete('/manage-state/{id}', [StateController::class, 'destroy'])
        ->name('backend.manage-state.destroy');
});
