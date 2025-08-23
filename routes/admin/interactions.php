<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Interactions\Index as InteractionIndex;
use App\Livewire\Admin\Interactions\Create as InteractionCreate;
use App\Livewire\Admin\Interactions\Show as InteractionShow;
use App\Livewire\Admin\Interactions\Edit as InteractionEdit;

Route::prefix('interactions')->name('interactions.')->group(function () {
    Route::get('/', InteractionIndex::class)->name('index');
    Route::get('/{interaction}', InteractionShow::class)->name('show');
    // Route::get('/', function () {
    //     return view('admin.interactions.index');
    // })->name('index');

    // Route::get('/calls', function () {
    //     return view('admin.interactions.calls.index');
    // })->name('calls.index');

    // Route::get('/calls/{call}', function () {
    //     return view('admin.interactions.calls.show');
    // })->name('calls.show');

    // Route::get('/messages', function () {
    //     return view('admin.interactions.messages.index');
    // })->name('messages.index');

    // Route::get('/messages/{message}', function () {
    //     return view('admin.interactions.messages.show');
    // })->name('messages.show');
});
