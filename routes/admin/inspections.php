<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/inspections')->name('inspections.')->group(function () {
    Route::get('/', function () {
        return view('admin.inspections.index');
    })->name('index');
    Route::get('/{inspection}', function () {
        return view('admin.inspections.show');
    })->name('show');
});
