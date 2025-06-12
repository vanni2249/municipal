<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['it-office', 'mayors-office', 'finance-department']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/interactions')->name('interactions.')->group(function (){
            Route::get('/', function () {
                return view('agencies.interactions.index');
            })->name('index');

            Route::get('/calls', function () {
                return view('agencies.interactions.calls.index');
            })->name('calls.index');

            Route::get('/calls/{call}', function () {
                return view('agencies.interactions.calls.show');
            })->name('calls.show');

            Route::get('/messages', function () {
                return view('agencies.interactions.messages.index');
            })->name('messages.index');

            Route::get('/messages/{message}', function () {
                return view('agencies.interactions.messages.show');
            })->name('messages.show');
        });
    });