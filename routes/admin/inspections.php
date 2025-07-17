<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/inspections')->name('inspections.')->group(function () {
    Route::get('/', function () {
        return view('agencies.inspections.index');
    })->name('index');
    Route::get('/{inspection}', function () {
        return view('agencies.inspections.show');
    })->name('show');
});
