<?php

use Illuminate\Support\Facades\Route;

Route::prefix('merchants')->name('merchants.')->group(function () {
    Route::get('/login', function () {
        return view('merchants.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('merchants.auth.register');
    })->name('register');

    // Route::get('/forgot-password', function () {
    //     return view('merchants.auth.forgot-password');
    // })->name('forgot-password');
    // Route::get('/reset-password', function () {
    //     return view('merchants.auth.reset-password');
    // })->name('reset-password');
    // Route::get('/verify-email', function () {
    //     return view('merchants.auth.verify-email');
    // })->name('verify-email');
    // Route::get('/confirm-password', function () {
    //     return view('merchants.auth.confirm-password');
    // })->name('confirm-password');
    // Route::get('/two-factor-authentication', function () {
    //     return view('merchants.auth.two-factor-authentication');
    // })->name('two-factor-authentication');
    Route::get('/profile', function () {
        return view('merchants.auth.profile');
    })->name('profile.index');

    Route::get('/dashboard', function () {
        return view('merchants.dashboard');
    })->name('dashboard');

    Route::get('/services', function () {
        return view('merchants.services.index');
    })->name('services.index');

    Route::get('/notifications', function () {
        return view('merchants.notifications.index');
    })->name('notifications.index');

    /*
    ** Routes for businesses
    */

    Route::prefix('businesses')->name('businesses.')->group(function () {
        Route::get('/create', function () {
            return view('merchants.modules.businesses.create');
        })->name('create');
        
        Route::get('/', function () {
            return view('merchants.modules.businesses.index');
        })->name('index');

        Route::get('/{business}', function ($business) {
            return view('merchants.modules.businesses.show', ['business' => $business]);
        })->name('show');


        Route::get('/{business}/edit', function ($business) {
            return view('merchants.modules.businesses.edit', ['business' => $business]);
        })->name('edit');
    });

    /*
    ** Routes for aplications
    */

    Route::prefix('applications')->name('applications.')->group(function () {
        Route::get('/', function () {
            return view('merchants.modules.applications.index');
        })->name('index');

        Route::get('/{application}', function ($application) {
            return view('merchants.modules.applications.show', ['application' => $application]);
        })->name('show');

        Route::prefix('collect-debris')->name('collect-debris.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.applications.collect-debris.create');
            })->name('create');
        });
    });

    /*
    ** Routes for settlements
    */
    Route::prefix('settlements')->name('settlements.')->group(function () {
        Route::get('/', function () {
            return view('merchants.modules.settlements.index');
        })->name('index');

        Route::get('/{settlement}', function ($settlement) {
            return view('merchants.modules.settlements.show', ['settlement' => $settlement]);
        })->name('show');

        /*
        ** Routes for building permits
        */
        Route::prefix('building-permits')->name('building-permits.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.settlements.building-permits.create');
            })->name('create');
        });

        /*
        ** Routes for temp patents
        */
        Route::prefix('temp-patents')->name('temp-patents.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.settlements.temp-patents.create');
            })->name('create');
        });

        /*
        ** Routes for official patents
        */
        Route::prefix('official-patents')->name('official-patents.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.settlements.official-patents.create');
            })->name('create');
        });

        /*
        ** Routes for renew patents
        */
        Route::prefix('renew-patents')->name('renew-patents.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.settlements.renew-patents.create');
            })->name('create');
        });

        /*
        ** Routes for use permits
        */
        Route::prefix('use-permits')->name('use-permits.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.settlements.use-permits.create');
            })->name('create');
        });
    });

    /*
    ** Routes for messages
    */
    Route::prefix('interactions')->name('interactions.')->group(function () {
        Route::get('/', function () {
            return view('merchants.modules.interactions.index');
        })->name('index');

        Route::get('/{interaction}', function ($interaction) {
            return view('merchants.modules.interactions.show', ['interaction' => $interaction]);
        })->name('show');

        Route::prefix('calls')->name('calls.')->group(function ($call) {
            Route::get('/create', function () {
                return view('merchants.modules.interactions.calls.create');
            })->name('create');

            Route::get('/{call}', function ($call) {
                return view('merchants.modules.interactions.calls.show', ['call' => $call]);
            })->name('show');
        });
        Route::prefix('messages')->name('messages.')->group(function () {
            Route::get('/create', function () {
                return view('merchants.modules.interactions.messages.create');
            })->name('create');

            Route::get('/{message}', function ($message) {
                return view('merchants.modules.interactions.messages.show', ['message' => $message]);
            })->name('show');
        });
    });

    /*
    ** Routes for news
    */
    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', function () {
            return view('merchants.modules.news.index');
        })->name('index');

        Route::get('/{new}', function ($new) {
            return view('merchants.modules.news.show', ['new' => $new]);
        })->name('show');
    });
});
