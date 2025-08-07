<?php

use App\Models\Register;
use Illuminate\Support\Facades\Route;

Route::prefix('/registers')->name('users.registers.')->group(function () {
    Route::get('/', function () {
        return view('users.registers.index');
    })->name('index');

    Route::get('/{register}', function (Register $register) {
        return view('users.registers.show', ['register' => $register]);
    })->name('show');

});
