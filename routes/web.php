<?php

use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {

    Route::view('/', 'home')->name('home');

});
