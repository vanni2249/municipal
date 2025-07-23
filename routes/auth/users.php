<?php

use App\Http\Middleware\GuestUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/login/{role}', function ($role) {
        return view('auth.users.login', compact('role'));
    })->middleware(GuestUser::class)->name('login');

    Route::get('/register/{role}', function ($role) {
        return view('auth.users.register', compact('role'));
    })->middleware(GuestUser::class)->name('register');

    Route::get('/logout', function () {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    })->name('logout');
});
