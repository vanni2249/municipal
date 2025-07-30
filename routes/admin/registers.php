<?php

use App\Models\Register;
use Illuminate\Support\Facades\Route;

Route::prefix('/registers')->name('registers.')->group(function () {
    Route::get('/', function () {
        return view('admin.registers.index');
    })->name('index');

    Route::get('/create', function () {
        return view('admin.registers.create');
    })->name('create');

    Route::get('/{register}', function (Register $register) {
        return view('admin.registers.show', compact('register'));
    })->name('show');
});