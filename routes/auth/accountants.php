<?php

use Illuminate\Support\Facades\Route;

Route::prefix('accountants')->name('accountants.')->group(function () {
    Route::get('/login', function () {
        return view('auth.accountants.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.accountants.register');
    })->name('register');

});