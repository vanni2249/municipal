<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Applications\Index as ApplicationIndex;
use App\Livewire\Users\Applications\Create as ApplicationCreate;
use App\Livewire\Users\Applications\Show as ApplicationShow;
use App\Livewire\Users\Applications\Edit as ApplicationEdit;

use App\Livewire\Users\Applications\Debris\Create as DebrisCreate;
use App\Livewire\Users\Applications\Debris\Show as DebrisShow;

Route::prefix('/applications')->name('users.applications.')->group(function () {
    Route::get('/', ApplicationIndex::class)->name('index');
    // Route::get('/create/{service}', ApplicationCreate::class)->name('create');
    Route::get('/{application}', ApplicationShow::class)->name('show');
    // Route::get('/{application}/edit', ApplicationEdit::class)->name('edit');

    Route::prefix('/debris')->name('debris.')->group(function () {
        // Route::get('/create', ApplicationCreate::class)->name('create');
        Route::get('/create', DebrisCreate::class)->name('create');
        Route::get('/{debris}', DebrisShow::class)->name('show');
    });

});
