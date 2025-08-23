<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Interactions\Index as InteractionIndex;
use App\Livewire\Users\Interactions\Create as InteractionCreate;
use App\Livewire\Users\Interactions\Show as InteractionShow;


Route::prefix('/interactions')->name('users.interactions.')->group(function () {
    
    Route::get('/', InteractionIndex::class)->name('index');
    Route::get('/create/{type}', InteractionCreate::class)->name('create');
    Route::get('/{interaction}', InteractionShow::class)->name('show');
    
    // Route::get('/', function () {
    //     return view('users.interactions.index');
    // })->name('index');

    // Route::prefix('/calls')->name('calls.')->group(function () {
    //     Route::get('/create', function () {
    //         return view('users.interactions.calls.create');
    //     })->name('create');

    //     Route::get('/{call}', function ($call) {
    //         return view('users.interactions.calls.show', ['call' => $call]);
    //     })->name('show');
    // });
    // Route::prefix('/messages')->name('messages.')->group(function () {
    //     Route::get('/create', function () {
    //         return view('users.interactions.messages.create');
    //     })->name('create');

    //     Route::get('/{message}', function ($message) {
    //         return view('users.interactions.messages.show', ['message' => $message]);
    //     })->name('show');
    // });
});
