<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['it-office', 'mayors-office']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/facilities')->name('facilities.')->group(function (){
            Route::get('/', function () {
                return view('agencies.facilities.index');
            })->name('index');
            Route::get('/{facility}', function ($facility) {
                return view('agencies.facilities.show', ['facility' => $facility]);
            })->name('show');
        });
    });