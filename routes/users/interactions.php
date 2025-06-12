<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/interactions')->name('interactions.')->group(function (){
            Route::get('/', function () {
                return view('users.interactions.index');
            })->name('index');

            Route::prefix('/calls')->name('calls.')->group(function () {
                Route::get('/create', function () {
                    return view('users.interactions.calls.create');
                })->name('create');

                Route::get('/{call}', function ($call) {
                    return view('users.interactions.calls.show', ['call' => $call]);
                })->name('show');
            });
            Route::prefix('/messages')->name('messages.')->group(function () {
                Route::get('/create', function () {
                    return view('users.interactions.messages.create');
                })->name('create');

                Route::get('/{message}', function ($message) {
                    return view('users.interactions.messages.show', ['message' => $message]);
                })->name('show');
            });


        });
    });