<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainApp\HomepageController;

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/')->controller(HomepageController::class)->group(function () {
    Route::get('', 'index')->name('homepage');
    Route::get('about', 'about')->name('about');
    Route::get('menu', 'menu')->name('menu');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('packages/{package_slug}', 'package_details')->name('package.details');
    Route::get('contact', 'contact')->name('contact');
});
