<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/services')->name('users.services.')->group(function () {
    Route::get('/', function () {
        return view('users.services.index');
    })->name('index');
});
