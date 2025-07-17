<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/registers')->name('registers.')->group(function () {
    Route::get('/', function () {
        return view('agencies.registers.index');
    })->name('index');

    Route::prefix('/employees')->name('employees.')->group(function () {
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

    Route::prefix('/citizens')->name('citizens.')->group(function () {
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

    Route::prefix('/merchants')->name('merchants.')->group(function () {
        Route::get('/', function () {
            return view('agencies.registers.merchants.index');
        })->name('index');
        Route::get('/create', function () {
            return view('agencies.registers.merchants.create');
        })->name('create');
        Route::get('/{merchant}', function ($merchant) {
            return view('agencies.registers.partials.merchants.show', ['merchant' => $merchant]);
        })->name('show');
        Route::get('/{merchant}/edit', function () {
            return view('agencies.registers.merchants.edit');
        })->name('edit');

        Route::prefix('/{merchant}/businesses')->name('businesses.')->group(function () {
            Route::get('/{business}', function ($merchant, $business) {
                return view('agencies.registers.partials.businesses.show', ['merchant' => $merchant, 'business' => $business]);
            })->name('show');

            Route::prefix('/{business}/patents')->name('patents.')->group(function () {
                Route::get('/{patent}', function ($merchant, $business, $patent) {
                    return view('agencies.registers.partials.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
                })->name('show');

                Route::prefix('/{patent}/periods')->name('patents.')->group(function () {
                    Route::get('/{period}', function ($merchant, $patent, $period) {
                        return view('agencies.registers.partials.periods.show', ['merchant' => $merchant, 'patent' => $patent, 'period' => $period]);
                    })->name('show');
                });
            });
            Route::prefix('/{business}/permits')->name('permits.')->group(function () {
                Route::get('/{permit}', function ($merchant, $business, $permit) {
                    return view('agencies.registers.partials.permits.show', ['merchant' => $merchant, 'business' => $business, 'permit' => $permit]);
                })->name('show');
            });
            Route::prefix('/{business}/settlements')->name('settlements.')->group(function () {
                Route::get('/{settlement}', function ($merchant, $business, $settlement) {
                    return view('agencies.registers.partials.settlements.show', ['merchant' => $merchant, 'business' => $business, 'settlement' => $settlement]);
                })->name('show');
            });
        });
    });

    Route::prefix('/accountants')->name('accountants.')->group(function () {
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

        Route::prefix('{accountant}/merchants')->name('merchants.')->group(function () {
            Route::get('/{merchant}', function ($accountant, $merchant) {
                return view('agencies.registers.partials.merchants.show', ['accountant' => $accountant, 'merchant' => $merchant]);
            })->name('show');

            Route::prefix('/{merchant}/businesses')->name('businesses.')->group(function () {
                Route::get('/{business}', function ($merchant, $business) {
                    return view('agencies.registers.partials.businesses.show', ['merchant' => $merchant, 'business' => $business]);
                })->name('show');

                Route::prefix('/{business}/patents')->name('patents.')->group(function () {
                    Route::get('/{patent}', function ($merchant, $business, $patent) {
                        return view('agencies.registers.partials.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
                    })->name('show');
                });
                Route::prefix('/{business}/patents')->name('patents.')->group(function () {
                    Route::get('/{patent}', function ($merchant, $business, $patent) {
                        return view('agencies.registers.partials.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
                    })->name('show');

                    Route::prefix('/{patent}/periods')->name('patents.')->group(function () {
                        Route::get('/{period}', function ($merchant, $patent, $period) {
                            return view('agencies.registers.partials.periods.show', ['merchant' => $merchant, 'patent' => $patent, 'period' => $period]);
                        })->name('show');
                    });
                });
                Route::prefix('/{business}/permits')->name('permits.')->group(function () {
                    Route::get('/{permit}', function ($merchant, $business, $permit) {
                        return view('agencies.registers.partials.permits.show', ['merchant' => $merchant, 'business' => $business, 'permit' => $permit]);
                    })->name('show');
                });
                Route::prefix('/{business}/settlements')->name('settlements.')->group(function () {
                    Route::get('/{settlement}', function ($merchant, $business, $settlement) {
                        return view('agencies.registers.partials.settlements.show', ['merchant' => $merchant, 'business' => $business, 'settlement' => $settlement]);
                    })->name('show');
                });
            });
        });
    });

    Route::prefix('/contractors')->name('contractors.')->group(function () {
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

    Route::prefix('/suppliers')->name('suppliers.')->group(function () {
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

    Route::prefix('/seniors')->name('seniors.')->group(function () {
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

    Route::prefix('/disabled-people')->name('disabled-people.')->group(function () {
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
