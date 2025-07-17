<?php

use Illuminate\Support\Facades\Route;

Route::prefix('settlements')->name('settlements.')->group(function () {
    Route::get('/', function () {
        return view('agencies.settlements.index');
    })->name('index');
    Route::get('/{settlement}', function () {
        return view('agencies.settlements.show');
    })->name('show');
});
