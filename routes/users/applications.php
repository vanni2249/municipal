<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Applications\Index as ApplicationIndex;
use App\Livewire\Users\Applications\Create as ApplicationCreate;
use App\Livewire\Users\Applications\Show as ApplicationShow;
use App\Livewire\Users\Applications\Edit as ApplicationEdit;

Route::prefix('/applications')->name('users.applications.')->group(function () {
    Route::get('/', ApplicationIndex::class)->name('index');
    Route::get('/create/{service}', ApplicationCreate::class)->name('create');
    Route::get('/{application}', ApplicationShow::class)->name('show');
    Route::get('/{application}/edit', ApplicationEdit::class)->name('edit');

});
