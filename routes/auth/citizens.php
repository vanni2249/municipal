<?php

use Illuminate\Support\Facades\Route;

Route::prefix('citizens')->name('citizens.')->group(function () {
    Route::get('/login', function () {
        return view('auth.citizens.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.citizens.register');
    })->name('register');

});