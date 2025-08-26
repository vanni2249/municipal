<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Rents\Index as RentIndex;
use App\Livewire\Users\Rents\Show as RentShow;
use App\Livewire\Users\Rents\Create as RentCreate;
use App\Livewire\Users\Rents\Edit as RentEdit;

Route::prefix('/rents')->name('users.rents.')->group(function () {
    Route::get('/', RentIndex::class)->name('index');
    Route::get('/{rent}', RentShow::class)->name('show');
    Route::get('/create/{service}', RentCreate::class)->name('create');
    Route::get('/{rent}/edit', RentEdit::class)->name('edit');
});
