<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Users\Accounts\Index as UserAccountIndex;
use App\Livewire\Users\Accounts\Create as UserAccountCreate;
use App\Livewire\Users\Accounts\Attach as UserAccountAttach;


use App\Livewire\Users\Accounts\Businesses\Index as UserAccountBusinessIndex;
use App\Livewire\Users\Accounts\Businesses\Create as UserAccountBusinessCreate;
use App\Livewire\Users\Accounts\Businesses\Attach as UserAccountBusinessAttach;


use App\Livewire\Users\Accounts\Merges\Index as UserAccountMergesIndex;
use App\Livewire\Users\Accounts\Merges\Create as UserAccountMergesCreate;
use App\Livewire\Users\Accounts\Merges\Attach as UserAccountMergesAttach;

Route::prefix('users/accounts')->name('users.accounts.')->group(function () {
    Route::get('/', UserAccountIndex::class)->name('index');
    Route::get('/create', UserAccountCreate::class)->name('create');
    Route::get('/attach', UserAccountAttach::class)->name('attach');

        Route::prefix('/accounts/{account}/businesses')->name('accounts.businesses')->group(function () {
            Route::get('/', UserAccountBusinessIndex::class)->name('index');
            Route::get('/create', UserAccountBusinessCreate::class)->name('create');
            Route::get('/attach', UserAccountBusinessAttach::class)->name('attach');
        });

        Route::prefix('/accounts/{account}/merges')->name('accounts.merges')->group(function () {
            Route::get('/', UserAccountMergesIndex::class)->name('index');
            Route::get('/create', UserAccountMergesCreate::class)->name('create');
            Route::get('/attach', UserAccountMergesAttach::class)->name('attach');
        });

});