<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/merchants')->name('merchants.')->group(function () {
    Route::get('/', function () {
        return view('admin.merchants.index');
    })->name('index');
    Route::get('/create', function () {
        return view('admin.merchants.create');
    })->name('create');
    Route::get('/{merchant}', function () {
        return view('admin.merchants.show');
    })->name('show');
    Route::get('/{merchant}/edit', function () {
        return view('admin.merchants.edit');
    })->name('edit');

    // Negocios del Comerciante
    Route::prefix('/{merchant}/businesses')->name('businesses.')->group(function () {
        // Negocio
        Route::get('/{business}', function ($merchant, $business) {
            return view('admin.merchants.businesses.show', ['merchant' => $merchant, 'business' => $business]);
        })->name('show');
        // Patentes del Negocio
        Route::prefix('/{business}/patents')->name('patents.')->group(function () {
            // Patente
            Route::get('/{patent}', function ($merchant, $business, $patent) {
                return view('admin.merchants.businesses.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
            })->name('show');
            // Periodos de la Patente
            Route::prefix('/{patent}/periods')->name('patents.')->group(function () {
                // Periodos de la Patente
                Route::get('/', function ($merchant, $patent) {
                    return view('admin.merchants.businesses.patents.periods.index', ['merchant' => $merchant, 'patent' => $patent]);
                })->name('index');
                // Periodo de la Patente
                Route::get('/{period}', function ($merchant, $patent, $period) {
                    return view('admin.merchants.businesses.patents.periods.show', ['merchant' => $merchant, 'patent' => $patent, 'period' => $period]);
                })->name('show');
            });
        });
        // Permisos del Negocio
        Route::prefix('/{business}/permits')->name('permits.')->group(function () {

            Route::get('/{permit}', function ($merchant, $business, $permit) {
                return view('admin.merchants.businesses.permits.show', ['merchant' => $merchant, 'business' => $business, 'permit' => $permit]);
            })->name('show');
        });
        // Radicados del Negocio
        Route::prefix('/{business}/settlements')->name('settlements.')->group(function () {

            Route::get('/{settlement}', function ($merchant, $business, $settlement) {
                return view('admin.merchants.businesses.settlements.show', ['merchant' => $merchant, 'business' => $business, 'settlement' => $settlement]);
            })->name('show');
        });
    });
});
