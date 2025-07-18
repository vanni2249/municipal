<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/equipments')->name('equipments.')->group(function () {
    Route::get('/', function () {
        return view('admin.equipments.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.equipments.create');
    })->name('create');
    Route::get('/{equipment}', function () {
        return view('admin.equipments.show');
    })->name('show');
    Route::get('/{equipment}/edit', function () {
        return view('admin.equipments.edit');
    })->name('edit');
});
