<?php

use App\Http\Middleware\GuestAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', function () {
        return view('auth.admin.login');
    })->middleware(GuestAdmin::class)->name('login');

    Route::get('/register', function () {
        return view('auth.admin.register');
    })->middleware(GuestAdmin::class)->name('register');

    Route::get('/logout', function () {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    })->name('logout');
});
