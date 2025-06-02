<?php

use Illuminate\Support\Facades\Route;

Route::prefix('recreation-sports-department')->name('recreation-sports-department.')->group(function () {
    Route::get('/dashboard', function () {
        return view('recreation-sports-department.dashboard');
    })->name('dashboard');

     /*
    ** Routes Applications
    */
    Route::get('/applications', function () {
        return view('modules.applications.index');
    })->name('applications.index');

    Route::get('/applications/{application}', function ($application) {
        return view('modules.applications.show', ['application' => $application]);
    })->name('applications.show');

    /*
    ** Routes inspections
    */
    Route::get('/inspections', function () {
        return view('modules.inspections.index');
    })->name('inspections.index');

    Route::get('/inspections/{inspection}', function ($inspection) {
        return view('modules.inspections.show', ['inspection' => $inspection]);
    })->name('inspections.show');

    /*
    ** Routes routes
    */
    Route::get('/routes', function () {
        return view('modules.routes.index');
    })->name('routes.index');

    Route::get('/routes/{route}', function ($route) {
        return view('modules.routes.show', ['route' => $route]);
    })->name('routes.show');
    
    /*
    ** Routes facilities
    */
    Route::get('/facilities', function () {
        return view('modules.facilities.index');
    })->name('facilities.index');

    Route::get('/facilities/{facility}', function ($facility) {
        return view('modules.facilities.show', ['facility' => $facility]);
    })->name('facilities.show');
});