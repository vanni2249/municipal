<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['citizens', 'merchants', 'accountants', 'contractors']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/rents')->name('rents.')->group(function (){
            Route::get('/', function () {
                return view('users.rents.index');
            })->name('index');
            Route::get('/{rent}', function ($rent) {
                return view('users.rents.show', ['rent' => $rent]);
            })->name('show');

            Route::prefix('facilities')->name('facilities.')->group(function () {
                Route::get('/create', function () {
                    return view('users.rents.facilities.create');
                })->name('create');
            });
        });
    });