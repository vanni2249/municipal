<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Dashboard\Index as DashboardIndex;

Route::get('/dashboard', DashboardIndex::class)->name('users.dashboard');

Route::get('/profile', function () {
    return view('users.profile.index');
})->name('profile');

Route::get('/change-type-navigation/{type}', function ($type) {
    if (in_array($type, ['citizen', 'merchant'])) {
        session(['type_navigation' => $type]);
    }
    
    return redirect()->route('users.dashboard');
})->name('change-type-navigation');
