<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/suppliers')->name('suppliers.')->group(function () {

    Route::get('/', function () {
        return view('admin.suppliers.index');
    })->name('index');
    Route::get('/{supplier}', function () {
        return view('admin.suppliers.show');
    })->name('show');
});
