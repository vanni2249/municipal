<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('agencies.dashboard.index');
})->name('dashboard');
