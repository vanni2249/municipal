<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/users')->name('users.')->group(function () {

    Route::get('/', function () {
        return view('admin.users.index');
    })->name('index');
    Route::get('/{user}', function () {
        return view('admin.users.show');
    })->name('show');
});
