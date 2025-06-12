<?php

use Illuminate\Support\Facades\Route;

$array = [
    'it-office', 
    'mayors-office', 
    'finance-department',
    'citizen-help-office',
    'public-works-department',
    'public-works-department',
    'recreation-sports-department',
];

Route::prefix(in_array(request()->segment(1), $array) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('agencies.dashboard.index');
        })->name('dashboard');
    });