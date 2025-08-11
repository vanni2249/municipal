<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Merchants\Index as MerchantIndex;
use App\Livewire\Users\Merchants\Create as MerchantCreate;
use App\Livewire\Users\Merchants\Show as MerchantShow;
use App\Livewire\Users\Merchants\Edit as MerchantEdit;

Route::prefix('/merchants')->name('users.merchants.')->group(function () {

    Route::get('/', MerchantIndex::class)->name('index');

    Route::get('/create', MerchantCreate::class)->name('create');

    Route::get('/{merchant}', MerchantShow::class)->name('show');

    Route::get('/{merchant}/edit', MerchantEdit::class)->name('edit');

    Route::prefix('{merchant}/businesses')->name('businesses.')->group(function () {
        Route::get('/create', function ($merchant) {
            return view('users.merchants.businesses.create', ['merchant' => $merchant]);
        })->name('create');

        Route::get('/{business}', function ($business) {
            return view('users.merchants.businesses.show', ['business' => $business]);
        })->name('show');

        Route::prefix('{business}/patents')->name('patents.')->group(function () {
            Route::get('/create', function () {
                return view('users.merchants.businesses.patents.create');
            })->name('create');

            Route::get('/{patent}', function ($patent) {
                return view('users.merchants.businesses.patents.show', ['patent' => $patent]);
            })->name('show');

            Route::prefix('{patent}/periods')->name('periods.')->group(function () {
                Route::get('/{period}', function ($period) {
                    return view('users.merchants.businesses.patents.periods.show', ['period' => $period]);
                })->name('show');
            });
        });

        Route::prefix('{business}/permits')->name('permits.')->group(function () {

            Route::get('/{permit}', function ($permit) {
                return view('users.merchants.businesses.permits.show', ['permit' => $permit]);
            })->name('show');
        });

        Route::prefix('{business}/settlements')->name('settlements.')->group(function () {
            Route::get('/{settlement}', function ($settlement) {
                return view('users.merchants.businesses.settlements.show', ['settlement' => $settlement]);
            })->name('show');

            Route::prefix('/building-permit')->name('building-permit.')->group(function () {
                Route::get('/create', function () {
                    return view('users.merchants.businesses.settlements.building-permit.create');
                })->name('create');
            });

            Route::prefix('/use-permit')->name('use-permit.')->group(function () {
                Route::get('/create', function () {
                    return view('users.merchants.businesses.settlements.use-permit.create');
                })->name('create');
            });

            Route::prefix('/temp-patent')->name('temp-patent.')->group(function () {
                Route::get('/create', function () {
                    return view('users.merchants.businesses.settlements.temp-patent.create');
                })->name('create');
            });

            Route::prefix('/official-patent')->name('official-patent.')->group(function () {
                Route::get('/create', function () {
                    return view('users.merchants.businesses.settlements.official-patent.create');
                })->name('create');
            });
        });
    });
});
