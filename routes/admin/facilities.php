<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/facilities')->name('facilities.')->group(function () {
    Route::get('/', function () {
        return view('admin.facilities.index');
    })->name('index');
    Route::get('/{facility}', function ($facility) {
        return view('admin.facilities.show', ['facility' => $facility]);
    })->name('show');
});
