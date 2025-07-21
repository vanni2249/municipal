<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/contractors')->name('contractors.')->group(function () {

    Route::get('/', function () {
        return view('admin.contractors.index');
    })->name('index');
    Route::get('/{contractor}', function () {
        return view('admin.contractors.show');
    })->name('show');
});
