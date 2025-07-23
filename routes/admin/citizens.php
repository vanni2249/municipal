<?php

use App\Models\Citizen;
use Illuminate\Support\Facades\Route;

Route::prefix('/citizens')->name('citizens.')->group(function () {
    Route::get('/', function () {
        return view('admin.citizens.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.citizens.create');
    })->name('create');
    Route::get('/{citizen}', function (Citizen $citizen) {
        return view('admin.citizens.show', ['citizen' => $citizen]);
    })->name('show');
    Route::get('/{citizen}/edit', function (Citizen $citizen) {
        return view('admin.citizens.edit', ['citizen' => $citizen]);
    })->name('edit');
});