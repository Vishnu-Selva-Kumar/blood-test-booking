<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {

    Route::get('/{slug}', [StaticPageController::class, 'index'])
        ->whereIn('slug', config('web.constants.static-pages') ?? [])->name('static.page');

    Route::view('/', 'home')->name('home');
    Route::view('/index.html', 'home')->name('home.index');

    Route::resource('packages', PackageController::class)->parameters(['packages' => 'slug'])
        ->names('packages')->only('index', 'show', 'store');
    Route::resource('services', ServiceController::class)->parameters(['services' => 'slug'])
        ->names('services')->only('index', 'show', 'store');

    Route::get('packages/{category?}', [PackageController::class, 'index'])->name('packages.category');


    Route::resource('contact-us', ContactController::class)->names('contact')->only('index', 'store');
    Route::view('/appointment', 'appointment')->name('appointment');
    Route::view('/site-map', 'site_map')->name('site-map');
    // no need to create a controller for these pages
    // Route::view('/portfolio-details', 'portfolio-details')->name('portfolio-details');
    // Route::view('/doctors', 'doctors')->name('doctors');
    // Route::view('/doctor-detail', 'doctor-details')->name('doctor-details');
    // Route::view('/blog-detail', 'blog-details')->name('blog-details');
    // Route::view('/service-details', 'service-details')->name('service-details');
});
