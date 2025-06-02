<?php

use Illuminate\Support\Facades\Route;

Route::prefix('agencies/municipal-administrators')->name('agencies.municipal-administrators.')->group(function () {
    Route::get('/dashboard', function () {
        return view('agencies.municipal-administrators.dashboard');
    })->name('dashboard');
});