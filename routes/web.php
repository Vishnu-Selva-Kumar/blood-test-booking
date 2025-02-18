<?php

use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {
    Route::view('/', 'home')->name('home');
    Route::view('/index.html', 'home')->name('home.index');
    Route::view('/contact-us', 'contact-us')->name('contact-us');
    // Route::view('/404', '404')->name('404');
    Route::view('/portfolio-details', 'portfolio-details')->name('portfolio-details');
    Route::view('/doctors', 'doctors')->name('doctors');
    Route::view('/blog-detail', 'blog-details')->name('blog-details');
    Route::view('/doctor-detail', 'doctor-details')->name('doctor-details');
    Route::view('/service', 'service')->name('service');
    Route::view('/service-details', 'service-details')->name('service-details');
    Route::view('/appointment', 'appointment')->name('appointment');
});
