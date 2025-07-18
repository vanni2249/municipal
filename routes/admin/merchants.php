<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/merchants')->name('merchants.')->group(function () {
    Route::get('/', function () {
        return view('admin.merchants.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.merchants.create');
    })->name('create');
    Route::get('/{merchant}', function () {
        return view('admin.merchants.show');
    })->name('show');
    Route::get('/{merchant}/edit', function () {
        return view('admin.merchants.edit');
    })->name('edit');
});