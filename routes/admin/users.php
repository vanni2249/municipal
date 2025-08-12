<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Users\Index as UserIndex;
use App\Livewire\Admin\Users\Show as UserShow;

Route::prefix('/users')->name('users.')->group(function () {

    Route::get('/', UserIndex::class)->name('index');

    Route::get('/{user}', UserShow::class)->name('show');
});
