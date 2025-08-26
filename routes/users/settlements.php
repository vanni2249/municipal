<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Settlements\Index as SettlementIndex;
use App\Livewire\Users\Settlements\Create as SettlementCreate;
use App\Livewire\Users\Settlements\Show as SettlementShow;
use App\Livewire\Users\Settlements\Edit as SettlementEdit;

Route::prefix('/settlements')->name('users.settlements.')->group(function () {
    Route::get('/', SettlementIndex::class)->name('index');
    Route::get('/create/{service}', SettlementCreate::class)->name('create');
    Route::get('/{settlement}', SettlementShow::class)->name('show');
    Route::get('/{settlement}/edit', SettlementEdit::class)->name('edit');
    
});
