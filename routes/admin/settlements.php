<?php

use Illuminate\Support\Facades\Route;

Route::prefix('settlements')->name('settlements.')->group(function () {
    Route::get('/', function () {
        return view('admin.settlements.index');
    })->name('index');
    Route::get('/{settlement}', function () {
        return view('admin.settlements.show');
    })->name('show');
});
