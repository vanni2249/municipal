<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['visitors', 'citizens', 'merchants', 'accountants', 'contractors', 'suppliers']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('users.dashboard.index');
        })->name('dashboard');

        // Route::get('/notifications', function () {
        //     return view('users.notifications.index');
        // })->name('notifications');

        Route::get('/profile', function () {
            return view('users.profile.index');
        })->name('profile');
    });