<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Actions\Index as ActionIndex;
use App\Livewire\Users\Actions\Create as ActionCreate;
use App\Livewire\Users\Actions\Show as ActionShow;
use App\Livewire\Users\Actions\Edit as ActionEdit;

Route::prefix('/actions')->name('users.actions.')->group(function () {
    Route::get('/', ActionIndex::class)->name('index');

    Route::get('/create/{service}', ActionCreate::class)->name('create');

    Route::get('/{service}', ActionShow::class)->name('show');

    Route::get('/{service}/edit', ActionEdit::class)->name('edit');

});