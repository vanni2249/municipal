<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Services\Index as ServiceIndex;

Route::prefix('/services')->name('users.services.')->group(function () {
    Route::get('/', ServiceIndex::class)->name('index');
});
