<?php

use Illuminate\Support\Facades\Route;

Route::prefix('interactions')->name('interactions.')->group(function () {
    Route::get('/', function () {
        return view('admin.interactions.index');
    })->name('index');

    Route::get('/calls', function () {
        return view('admin.interactions.calls.index');
    })->name('calls.index');

    Route::get('/calls/{call}', function () {
        return view('admin.interactions.calls.show');
    })->name('calls.show');

    Route::get('/messages', function () {
        return view('admin.interactions.messages.index');
    })->name('messages.index');

    Route::get('/messages/{message}', function () {
        return view('admin.interactions.messages.show');
    })->name('messages.show');
});
