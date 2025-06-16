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
                Route::get('/create', function () {
                    return view('agencies.registers.employees.create');
                })->name('create');
                Route::get('/{employee}', function () {
                    return view('agencies.registers.employees.show');
                })->name('show');
                Route::get('/{employee}/edit', function () {
                    return view('agencies.registers.employees.edit');
                })->name('edit');
            });

            Route::prefix('/citizens')->name('citizens.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.citizens.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.citizens.create');
                })->name('create');
                Route::get('/{citizen}', function () {
                    return view('agencies.registers.citizens.show');
                })->name('show');
                Route::get('/{citizen}/edit', function () {
                    return view('agencies.registers.citizens.edit');
                })->name('edit');
            });

            Route::prefix('/merchants')->name('merchants.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.merchants.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.merchants.create');
                })->name('create');
                Route::get('/{merchant}', function () {
                    return view('agencies.registers.merchants.show');
                })->name('show');
                Route::get('/{merchant}/edit', function () {
                    return view('agencies.registers.merchants.edit');
                })->name('edit');
            });

            Route::prefix('/accountants')->name('accountants.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.accountants.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.accountants.create');
                })->name('create');
                Route::get('/{accountant}', function () {
                    return view('agencies.registers.accountants.show');
                })->name('show');
                Route::get('/{accountant}/edit', function () {
                    return view('agencies.registers.accountants.edit');
                })->name('edit');
            });

            Route::prefix('/contractors')->name('contractors.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.contractors.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.contractors.create');
                })->name('create');
                Route::get('/{contractor}', function () {
                    return view('agencies.registers.contractors.show');
                })->name('show');
                Route::get('/{contractor}/edit', function () {
                    return view('agencies.registers.contractors.edit');
                })->name('edit');
            });

            Route::prefix('/suppliers')->name('suppliers.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.suppliers.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.suppliers.create');
                })->name('create');
                Route::get('/{supplier}', function () {
                    return view('agencies.registers.suppliers.show');
                })->name('show');
                Route::get('/{supplier}/edit', function () {
                    return view('agencies.registers.suppliers.edit');
                })->name('edit');
            });

            Route::prefix('/seniors')->name('seniors.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.seniors.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.seniors.create');
                })->name('create');
                Route::get('/{senior}', function () {
                    return view('agencies.registers.seniors.show');
                })->name('show');
                Route::get('/{senior}/edit', function () {
                    return view('agencies.registers.seniors.edit');
                })->name('edit');
            });

            Route::prefix('/disabled-people')->name('disabled-people.')->group(function (){
                Route::get('/', function () {
                    return view('agencies.registers.disabled-people.index');
                })->name('index');
                Route::get('/create', function () {
                    return view('agencies.registers.disabled-people.create');
                })->name('create');
                Route::get('/{people}', function () {
                    return view('agencies.registers.disabled-people.show');
                })->name('show');
                Route::get('/{people}/edit', function () {
                    return view('agencies.registers.disabled-people.edit');
                })->name('edit');
            });
        });
    });
