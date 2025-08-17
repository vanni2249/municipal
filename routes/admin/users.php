<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Users\Index as UserIndex;
use App\Livewire\Admin\Users\Show as UserShow;
use App\Livewire\Admin\Users\Edit as UserEdit;

Route::prefix('/users')->name('users.')->group(function () {

    Route::get('/', UserIndex::class)->name('index');

    Route::get('/{user}', UserShow::class)->name('show');

    Route::get('/{user}/edit', UserEdit::class)->name('edit');
});
