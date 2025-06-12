<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['it-office', 'mayors-office']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/routes')->name('routes.')->group(function (){
            Route::get('/', function () {
                return view('agencies.routes.index');
            })->name('index');
        });
    });

