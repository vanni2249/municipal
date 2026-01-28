<?php

use App\Http\Middleware\GuestAdmin;
use App\Http\Middleware\GuestUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Users\Login as UserLogin;
use App\Livewire\Auth\Users\Register as UserRegister;
use App\Livewire\Auth\Users\Attach as UserAttach;

use App\Models\Admin;
use App\Livewire\Auth\Admin\Login as AdminLogin;

// User Authentication Routes

Route::get('/login', UserLogin::class)->middleware(GuestUser::class)->name('login');

Route::get('/register', UserRegister::class)->middleware(GuestUser::class)->name('register');

Route::get('/attach', UserAttach::class)->middleware(GuestUser::class)->name('attach');

// Route::get('/unapproved/{role}', function ($role) {
//     return view('auth.users.unapproved', compact('role'));
// })->middleware(GuestUser::class)->name('unapproved');

// Route::get('/verify/{role}', function ($role) {
//     return view('auth.users.verify', compact('role'));
// })->middleware(GuestUser::class)->name('verify');

Route::get('/logout', function () {
    Auth::logout();

    session()->invalidate();

    session()->regenerateToken();

    return redirect('/');
})->middleware('auth')->name('logout');

// Admin Authentication Routes

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', AdminLogin::class)->middleware(GuestAdmin::class)->name('login');
    // Route::get('/login', function () {
    //     return view('auth.admin.login');
    // })->middleware(GuestAdmin::class)->name('login');

    // Route::get('/register', function () {
    //     return view('auth.admin.register');
    // })->middleware(GuestAdmin::class)->name('register');

    // Route::get('/logout', function () {
    //     Auth::logout();

    //     request()->session()->invalidate();

    //     request()->session()->regenerateToken();

    //     return redirect('/');
    // })->name('logout');
});
