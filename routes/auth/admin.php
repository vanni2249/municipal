<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', function () {
        return view('auth.admin.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.admin.register');
    })->name('register');

});