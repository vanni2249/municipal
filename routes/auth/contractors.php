<?php

use Illuminate\Support\Facades\Route;

Route::prefix('contractors')->name('contractors.')->group(function () {
    Route::get('/login', function () {
        return view('auth.contractors.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.contractors.register');
    })->name('register');

});