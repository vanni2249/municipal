<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/applications')->name('users.applications.')->group(function () {
    Route::get('/', function () {
        return view('users.applications.index');
    })->name('index');
    
    Route::get('/create/{type?}', function () {
        return view('users.applications.create');
    })->name('create');

    Route::get('/{application}', function ($application) {
        return view('users.applications.show', ['application' => $application]);
    })->name('show');


    // Route::prefix('/collect-debris')->name('collect-debris.')->group(function () {
    //     Route::get('/create', function () {
    //         return view('users.applications.collect-debris.create');
    //     })->name('create');
    // });
});
