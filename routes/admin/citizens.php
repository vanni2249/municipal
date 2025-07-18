<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/citizens')->name('citizens.')->group(function () {
    Route::get('/', function () {
        return view('admin.citizens.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.citizens.create');
    })->name('create');
    Route::get('/{citizen}', function () {
        return view('admin.citizens.show');
    })->name('show');
    Route::get('/{citizen}/edit', function () {
        return view('admin.citizens.edit');
    })->name('edit');
});