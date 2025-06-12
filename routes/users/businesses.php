<?php

use Illuminate\Support\Facades\Route;

Route::prefix('merchants')
    ->name('merchants.')
    ->group(function () {
        Route::prefix('/businesses')->name('businesses.')->group(function (){
            Route::get('/', function () {
                return view('users.businesses.index');
            })->name('index');
            Route::get('/create', function () {
                return view('users.businesses.create');
            })->name('create');
            Route::get('/{business}', function ($business) {
                return view('users.businesses.show', ['business' => $business]);
            })->name('show'); Route::get('/{business}', function ($business) {
                return view('users.businesses.show', ['business' => $business]);
            })->name('show');

            
            Route::prefix('/{business}/patents')->name('patents.')->group(function () {
                Route::get('/{patent}', function ($business, $patent) {
                    return view('users.businesses.patents.show', ['business' => $business , 'patent' => $patent]);
                })->name('show');

                Route::prefix('/{patent}/periods')->name('periods.')->group(function () {
                    Route::get('/{period}', function ($patent, $period) {
                        return view('users.businesses.patents.periods.show', ['patent' => $patent, 'period' => $period]);
                    })->name('show');
                });
            });

            Route::prefix('/{business}/permits')->name('permits.')->group(function () {
                Route::get('/{permit}', function ($business, $permit) {
                    return view('users.businesses.permits.show', ['business' => $business, 'permit' => $permit]);
                })->name('show');
            });

            Route::prefix('/{business}/settlements')->name('settlements.')->group(function () {
                Route::get('/{settlement}', function ($business, $settlement) {
                    return view('users.businesses.settlements.show', ['business' => $business, 'settlement' => $settlement]);
                })->name('show');

                Route::prefix('/building-permit')->name('building-permit.')->group(function () {
                    Route::get('/create', function () {
                        return view('users.businesses.settlements.building-permit.create');
                    })->name('create');
    
                });

                Route::prefix('/use-permit')->name('use-permit.')->group(function () {
                    Route::get('/create', function () {
                        return view('users.businesses.settlements.use-permit.create');
                    })->name('create');
                });

                Route::prefix('/temp-patent')->name('temp-patent.')->group(function () {
                    Route::get('/create', function () {
                        return view('users.businesses.settlements.temp-patent.create');
                    })->name('create');
                });

                Route::prefix('/official-patent')->name('official-patent.')->group(function () {
                    Route::get('/create', function () {
                        return view('users.businesses.settlements.official-patent.create');
                    })->name('create');
                });

            });

        });
    });