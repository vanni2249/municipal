<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['it-office', 'mayors-office']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/settlements')->name('settlements.')->group(function (){
            Route::get('/', function () {
                return view('agencies.settlements.index');
            })->name('index');
        });
    });
