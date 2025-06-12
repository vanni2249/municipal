<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['citizens', 'merchants']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/applications')->name('applications.')->group(function (){
            Route::get('/', function () {
                return view('users.applications.index');
            })->name('index');

            Route::get('/{application}', function ($application) {
                return view('users.applications.show', ['application' => $application]);
            })->name('show');

            Route::prefix('/collect-debris')->name('collect-debris.')->group(function () {
                Route::get('/create', function () {
                    return view('users.applications.collect-debris.create');
                })->name('create');
            });
        });
    });