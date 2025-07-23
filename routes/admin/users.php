<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::prefix('/users')->name('users.')->group(function () {

    Route::get('/', function () {
        return view('admin.users.index');
    })->name('index');
    Route::get('/{user}', function (User $user) {
        return view('admin.users.show', ['user' => $user]);
    })->name('show');
});
