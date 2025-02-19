<?php

use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {

    Route::get('/{slug}', [StaticPageController::class, 'index'])->name('static.page')
        ->whereIn('slug', config('web.constants.static-pages') ?? []);


    Route::view('/', 'home')->name('home');
    Route::view('/index.html', 'home')->name('home.index');

    Route::view('/packages', 'packages')->name('packages');
    Route::view('/package-detail', 'package-detail')->name('package-detail');


    Route::view('/portfolio-details', 'portfolio-details')->name('portfolio-details');
    Route::view('/doctors', 'doctors')->name('doctors');
    Route::view('/blog-detail', 'blog-details')->name('blog-details');
    Route::view('/doctor-detail', 'doctor-details')->name('doctor-details');
    Route::view('/service', 'service')->name('service');
    Route::view('/service-details', 'service-details')->name('service-details');
    Route::view('/appointment', 'appointment')->name('appointment');
});
