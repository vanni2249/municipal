<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('/employees')->name('employees.')->group(function () {
    Route::get('/', function () {
        return view('admin.employees.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.employees.create');
    })->name('create');
    Route::get('/{employee}', function (Admin $employee) {
        return view('admin.employees.show', ['employee' => $employee]);
    })->name('show');
    Route::get('/{employee}/edit', function (Admin $employee) {
        return view('admin.employees.edit', ['employee' => $employee]);
    })->name('edit');
});