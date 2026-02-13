<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Guest\Welcome\Index as WelcomeIndex;
use App\Livewire\Guest\Services\Index as ServiceIndex;
use App\Livewire\Guest\Services\Show as ServiceShow;

    // Route::get('/', function () {
    //     return view('guest.welcome');
    // })->name('welcome');
    Route::get('/', WelcomeIndex::class)->name('welcome');
    Route::get('/services/type/{type:slug}', ServiceIndex::class)->name('services.index');
    Route::get('/services/{service}', ServiceShow::class)->name('services.show');

    // Route::get('/types', function () {
    //     return view('guest.types.index');
    // })->name('types.index');

    // Route::get('/types/{type}', function (Type $type) {
    //     return view('guest.types.show', compact('type'));
    // })->name('types.show');

   