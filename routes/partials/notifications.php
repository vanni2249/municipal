<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/notifications')->name('notifications.')->group(function (){
            Route::get('/', function () {
                return view('users.notifications.index');
            })->name('index');
        });
    });