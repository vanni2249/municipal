<?php

use Illuminate\Support\Facades\Route;

Route::prefix('merchants')->name('merchants.')->group(function () {
    Route::get('/login', function () {
        return view('auth.merchants.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.merchants.register');
    })->name('register');

});