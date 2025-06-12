<?php

use Illuminate\Support\Facades\Route;

Route::prefix('employees')->name('employees.')->group(function () {
    Route::get('/login', function () {
        return view('auth.employees.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.employees.register');
    })->name('register');

});