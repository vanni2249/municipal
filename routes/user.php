<?php

use App\Http\Middleware\AuthUser;
use Illuminate\Support\Facades\Route;

use App\Livewire\Users\Profile\Index as UserProfile;
// use App\Livewire\Users\Settings as UserSettings;
// use App\Livewire\Users\Notifications as UserNotifications;

use App\Livewire\Users\Businesses\Index as UserBusinessIndex;
use App\Livewire\Users\Businesses\Create as UserBusinessCreate;

use App\Livewire\Users\Accounts\Index as UserAccountIndex;
use App\Livewire\Users\Accounts\Create as UserAccountCreate;
use App\Livewire\Users\Accounts\Attach as UserAccountAttach;


use App\Livewire\Users\Accounts\Businesses\Index as UserAccountBusinessIndex;
use App\Livewire\Users\Accounts\Businesses\Create as UserAccountBusinessCreate;
use App\Livewire\Users\Accounts\Businesses\Attach as UserAccountBusinessAttach;


use App\Livewire\Users\Accounts\Merges\Index as UserAccountMergesIndex;
use App\Livewire\Users\Accounts\Merges\Create as UserAccountMergesCreate;
use App\Livewire\Users\Accounts\Merges\Attach as UserAccountMergesAttach;

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/profile', UserProfile::class)->name('profile');

    Route::prefix('businesses')->name('businesses.')->middleware(AuthUser::class)->group(function () {
        Route::get('/', UserBusinessIndex::class)->name('index');
        Route::get('/create', UserBusinessCreate::class)->name('create');
    });
});

Route::prefix('users/accounts')->name('users.accounts.')->middleware(AuthUser::class)->group(function () {
    Route::get('/', UserAccountIndex::class)->name('index');
    Route::get('/create', UserAccountCreate::class)->name('create');
    Route::get('/attach', UserAccountAttach::class)->name('attach');

    Route::prefix('/{account}/businesses')->name('businesses.')->group(function () {
        Route::get('/', UserAccountBusinessIndex::class)->name('index');
        Route::get('/create', UserAccountBusinessCreate::class)->name('create');
        Route::get('/attach', UserAccountBusinessAttach::class)->name('attach');
    });

    Route::prefix('/{account}/merges')->name('merges.')->group(function () {
        Route::get('/', UserAccountMergesIndex::class)->name('index');
        Route::get('/create', UserAccountMergesCreate::class)->name('create');
        Route::get('/attach', UserAccountMergesAttach::class)->name('attach');
    });

});