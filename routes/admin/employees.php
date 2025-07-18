<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/employees')->name('employees.')->group(function () {
    Route::get('/', function () {
        return view('admin.employees.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.employees.create');
    })->name('create');
    Route::get('/{employee}', function () {
        return view('admin.employees.show');
    })->name('show');
    Route::get('/{employee}/edit', function () {
        return view('admin.employees.edit');
    })->name('edit');
});