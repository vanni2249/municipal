<?php

use Illuminate\Support\Facades\Route;

Route::prefix('contractors')->name('contractors.')->group(function () {
    Route::get('/login', function () {
        return view('contractors.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('contractors.auth.register');
    })->name('register');

    Route::get('/dashboard', function () {
        return view('contractors.dashboard');
    })->name('dashboard');

    Route::get('/services', function () {
        return view('contractors.services.index');
    })->name('services.index');

    Route::get('/services/{slug}', function ($slug) {

        return view('contractors.services.show', ['slug' => $slug]);
        
    })->name('services.show');
});
