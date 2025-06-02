<?php

use Illuminate\Support\Facades\Route;

Route::prefix('public-works-department')->name('public-works-department.')->group(function () {
    Route::get('/dashboard', function () {
        return view('public-works-department.dashboard');
    })->name('dashboard');

     /*
    ** Routes Applications
    */
    Route::prefix('/applications')->name('applications.')->group(function(){
        Route::get('/', function () {
            return view('modules.applications.index');
        })->name('index');

        Route::get('/{application}', function ($application) {
            return view('modules.applications.show', ['application' => $application]);
        })->name('show');

        /*
        ** collect debris
        */
        Route::prefix('/collect-debris')->name('collect-debris.')->group(function(){
            Route::get('/create', function(){
                return view('modules.applications.collect-debris.create');
            })->name('create');
        });
    });
    
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


    Route::get('/equipments', function() {
        return view('public-works-department.dashboard');
    })->name('equipments.index');

    // Route::get('/applications', function() {
    //     return view('public-works-department.dashboard');
    // })->name('applications.index');
    // Route::get('/routes', function() {
    //     return view('public-works-department.dashboard');
    // })->name('routes.index');
});