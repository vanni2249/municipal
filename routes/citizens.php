<?php

use Illuminate\Support\Facades\Route;

Route::prefix('citizens')->name('citizens.')->group(function () {
    Route::get('/login', function () {
        return view('users.citizens.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('users.citizens.auth.register');
    })->name('register');

    Route::get('/dashboard', function () {
        return view('users.citizens.dashboard');
    })->name('dashboard');

    Route::get('/services', function () {
        return view('users.citizens.services.index');
    })->name('services.index');

    Route::prefix('applications')->name('applications.')->group(function () {
        Route::get('/', function () {
            return view('users.citizens.modules.applications.index');
        })->name('index');

        Route::get('/{application}', function ($application) {
            return view('users.citizens.modules.applications.show', ['application' => $application]);
        })->name('show');

        Route::get('/collect-debris/create', function () {
            return view('users.citizens.modules.applications.collect-debris.create');
        })->name('collect-debris.create');

        Route::get('/sport-facilities/create', function () {
            return view('users.citizens.modules.applications.sport-facilities.create');
        })->name('sport-facilities.create');
    });
    Route::prefix('rents')->name('rents.')->group(function () {
        Route::get('/', function () {
            return view('users.citizens.modules.rents.index');
        })->name('index');

        Route::get('/{rent}', function ($rent) {
            return view('users.citizens.modules.rents.show', ['rent' => $rent]);
        })->name('show');

        Route::get('/activity-facilities/create', function () {
            return view('users.citizens.modules.rents.activity-facilities.create');
        })->name('activity-facilities.create');
    });
    Route::prefix('settlements')->name('settlements.')->group(function () {
        Route::get('/', function () {
            return view('users.citizens.modules.settlements.index');
        })->name('index');

        Route::get('/{settlement}', function ($settlement) {
            return view('users.citizens.modules.settlements.show', ['settlement' => $settlement]);
        })->name('show');

        Route::get('/building-permits/create', function () {
            return view('users.citizens.modules.settlements.building-permits.create');
        })->name('building-permits.create');
    });
    Route::prefix('registers')->name('registers.')->group(function () {
         Route::get('/', function () {
            return view('users.citizens.modules.registers.index');
        })->name('index');

        Route::get('/{register}', function ($register) {
            return view('users.citizens.modules.registers.show', ['register' => $register]);
        })->name('show');

        Route::get('/people-disabilities/create', function () {
            return view('users.citizens.modules.registers.people-disabilities.create');
        })->name('people-disabilities.create');

        Route::get('/senior-citizens/create', function () {
            return view('users.citizens.modules.registers.senior-citizens.create');
        })->name('senior-citizens.create');
    });

     Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', function () {
            return view('users.citizens.modules.news.index');
        })->name('index');

        Route::get('/{new}', function ($new) {
            return view('users.citizens.modules.news.show', ['new' => $new]);
        })->name('show');
     });

});
