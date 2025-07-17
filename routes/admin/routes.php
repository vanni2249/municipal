<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/routes')->name('routes.')->group(function () {
    Route::get('/', function () {
        return view('admin.routes.index');
    })->name('index');
    Route::get('/{route}', function () {
        return view('admin.routes.show');
    })->name('show');
});
