<?php

use Illuminate\Support\Facades\Route;

Route::prefix(in_array(request()->segment(1), ['it-office', 'mayors-office']) ? request()->segment(1) : '')
    ->name(request()->segment(1) . '.')
    ->group(function () {
        Route::prefix('/registers')->name('registers.')->group(function (){
            Route::get('/', function () {
                return view('agencies.registers.index');
            })->name('index');
            
            Route::prefix('/employees')->name('employees.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.employees.index');
                })->name('index');
                Route::get('/{employee}', function () {
                    return view('agencies.registers.employees.show');
                })->name('show');
            });

            Route::prefix('/citizens')->name('citizens.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.citizens.index');
                })->name('index');
                Route::get('/{citizen}', function () {
                    return view('agencies.registers.citizens.show');
                })->name('show');
            });

            Route::prefix('/merchants')->name('merchants.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.merchants.index');
                })->name('index');
                Route::get('/{merchant}', function () {
                    return view('agencies.registers.merchants.show');
                })->name('show');
            });

            Route::prefix('/accountants')->name('accountants.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.accountants.index');
                })->name('index');
                Route::get('/{accountant}', function () {
                    return view('agencies.registers.accountants.show');
                })->name('show');
            });

            Route::prefix('/contractors')->name('contractors.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.contractors.index');
                })->name('index');
                Route::get('/{contractor}', function () {
                    return view('agencies.registers.contractors.show');
                })->name('show');
            });

            Route::prefix('/suppliers')->name('suppliers.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.suppliers.index');
                })->name('index');
                Route::get('/{supplier}', function () {
                    return view('agencies.registers.suppliers.show');
                })->name('show');
            });

            Route::prefix('/seniors')->name('seniors.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.seniors.index');
                })->name('index');
                Route::get('/{senior}', function () {
                    return view('agencies.registers.seniors.show');
                })->name('show');
            });

            Route::prefix('/disabled-people')->name('disabled-people.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.disabled-people.index');
                })->name('index');
                Route::get('/{people}', function () {
                    return view('agencies.registers.disabled-people.show');
                })->name('show');
            });
        });
    });
