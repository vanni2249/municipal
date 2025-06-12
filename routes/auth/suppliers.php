<?php

use Illuminate\Support\Facades\Route;

Route::prefix('suppliers')->name('suppliers.')->group(function () {
    Route::get('/login', function () {
        return view('auth.suppliers.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.suppliers.register');
    })->name('register');

});