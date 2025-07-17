<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/rents')->name('rents.')->group(function () {
    Route::get('/', function () {
        return view('agencies.rents.index');
    })->name('index');
    Route::get('/{rent}', function () {
        return view('agencies.rents.show');
    })->name('show');
});
