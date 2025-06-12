<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['citizens', 'merchants', 'accountants', 'contractors']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/registers')->name('registers.')->group(function (){
            Route::get('/', function () {
                return view('users.registers.index');
            })->name('index');
            Route::get('/{register}', function () {
                return view('users.registers.show');
            })->name('show');

            Route::prefix('/people-disabilities')->name('people-disabilities.')->group(function () {
                Route::get('/create', function () {
                    return view('users.registers.people-disabilities.create');
                })->name('create');
            });

            Route::prefix('/senior-citizens')->name('senior-citizens.')->group(function () {
                Route::get('/create', function () {
                    return view('users.registers.senior-citizens.create');
                })->name('create');
            });
        });

    });