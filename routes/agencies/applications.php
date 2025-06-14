<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['it-office', 'mayors-office']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/applications')->name('applications.')->group(function (){
            Route::get('/', function () {
                return view('agencies.applications.index');
            })->name('index');
            Route::get('/{application}', function ($application) {
                return view('agencies.applications.show', ['application' => $application]);
            })->name('show');
        });
    });