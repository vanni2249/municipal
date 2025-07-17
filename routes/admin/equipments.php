<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/equipments')->name('equipments.')->group(function () {
    Route::get('/', function () {
        return view('agencies.equipments.index');
    })->name('index');
    Route::get('/{equipment}', function () {
        return view('agencies.equipments.show');
    })->name('show');
});
