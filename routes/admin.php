<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {
        return view('backend.dashboard');
    })->name('backend.dashboard');

    Route::get('edit-about-page', function () {
        return view('backend.staticpages.about');
    })->name('backend.edit-about-page');
});
