<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Citizens\Index as CitizenIndex;
use App\Livewire\Admin\Citizens\Create as CitizenCreate;
use App\Livewire\Admin\Citizens\Show as CitizenShow;
use App\Livewire\Admin\Citizens\Edit as CitizenEdit;

Route::prefix('/citizens')->name('citizens.')->group(function () {
    Route::get('/', CitizenIndex::class)->name('index');
    
    Route::get('/create', CitizenCreate::class)->name('create');

    Route::get('/{citizen}', CitizenShow::class)->name('show');

    Route::get('/{citizen}/edit', CitizenEdit::class)->name('edit');
});