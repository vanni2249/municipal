<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/settlements')->name('settlements.')->group(function (){
            Route::get('/', function () {
                return view('users.settlements.index');
            })->name('index');

            Route::get('/{settlement}', function ($settlement) {
                return view('users.settlements.show', ['settlement' => $settlement]);
            })->name('show');

            Route::prefix('/building-permit')->name('building-permit.')->group(function () {
                Route::get('/create', function () {
                    return view('users.settlements.building-permit.create');
                })->name('create');

            });
            Route::prefix('/use-permit')->name('use-permit.')->group(function () {
                Route::get('/create', function () {
                    return view('users.settlements.use-permit.create');
                })->name('create');
            });
        });
    });