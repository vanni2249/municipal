<?php

use Illuminate\Support\Facades\Route;

Route::prefix('employees')->name('employees.')->group(function () {
    Route::get('/login', function () {
        return view('employees.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('employees.auth.register');
    })->name('register');

    Route::get('/dashboard', function () {
        return view('employees.dashboard');
    })->name('dashboard');
});