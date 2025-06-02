<?php

use Illuminate\Support\Facades\Route;

Route::prefix('suppliers')->name('suppliers.')->group(function () {
   Route::get('/login', function () {
        return view('suppliers.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('suppliers.auth.register');
    })->name('register');

    Route::get('/dashboard', function () {
        return view('suppliers.dashboard');
    })->name('dashboard');
});