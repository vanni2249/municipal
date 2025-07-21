<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/invoices')->name('invoices.')->group(function () {

    Route::get('/', function () {
        return view('admin.invoices.index');
    })->name('index');
    Route::get('/{invoice}', function () {
        return view('admin.invoices.show');
    })->name('show');
});
