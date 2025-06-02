<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mayors-office')->name('mayors-office.')->group(function () {
    Route::get('/dashboard', function () {
        return view('mayors-office.dashboard');
    })->name('dashboard');


    /*
    ** Routes interactions
    */
    Route::get('/interactions', function () {
        return view('modules.interactions.index');
    })->name('interactions.index');

    Route::get('/interactions/{interaction}', function ($interaction) {
        return view('modules.interactions.show', ['interaction' => $interaction]);
    })->name('interactions.show');
    
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
    ** Routes registers
    */
    Route::get('/registers', function () {
        return view('modules.registers.index');
    })->name('registers.index');

    Route::get('/registers/{register}', function ($register) {
        return view('modules.registers.show', ['register' => $register]);
    })->name('registers.show');
    
    /*
    ** Routes registers
    */
    Route::get('/settlements', function () {
        return view('modules.settlements.index');
    })->name('settlements.index');

    Route::get('/settlements/{settlement}', function ($settlement) {
        return view('modules.settlements.show', ['settlement' => $settlement]);
    })->name('settlements.show');

    /*
    ** Routes rents
    */
    Route::get('/rents', function () {
        return view('modules.rents.index');
    })->name('rents.index');

    Route::get('/rents/{rent}', function ($rent) {
        return view('modules.rents.show', ['rent' => $rent]);
    })->name('rents.show');
    
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
    
    /*
    ** Routes equipments
    */
    Route::get('/equipments', function () {
        return view('modules.equipments.index');
    })->name('equipments.index');

    Route::get('/equipments/{equipment}', function ($equipment) {
        return view('modules.equipments.show', ['equipment' => $equipment]);
    })->name('equipments.show');


    
    Route::get('/users', function (){
        return view('modules.users.index');
    })->name('users.index');

    Route::get('/users/{user}', function ($user){
        return view('modules.users.show', ['user' => $user]);
    })->name('users.show');

    /*
    ** Routes for merchants
    */

    // mayors-office/merchants
    Route::get('/merchants', function (){
        return view('modules.merchants.index');
    })->name('merchants.index');

    // mayors-office/merchants/1
    Route::get('/merchants/{merchant}', function ($merchant){
        return view('modules.merchants.show', ['merchant' => $merchant]);
    })->name('merchants.show');

    // mayors-office/merchants/1/businesses/1
    Route::get('/merchants/{merchant}/businesses/{business}', function ($merchant, $business){
        return view('modules.merchants.businesses.show', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.show');

    // mayors-office/merchants/1/businesses/1/patents/1
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}', function ($merchant, $business, $patent){
        return view('modules.merchants.businesses.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
    })->name('merchants.businesses.patents.show');

    // mayors-office/merchants/1/businesses/1/patents/1/periods/show
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}/periods/{period}', function ($merchant, $business, $patent, $period){
        return view('modules.merchants.businesses.patents.periods.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent, 'period' => $period]);
    })->name('merchants.businesses.patents.periods.show');
    /*
    ** Routes for merchants
    */

    // mayors-office/businesses    
    Route::get('/businesses', function (){
        return view('modules.businesses.index');
    })->name('businesses.index');

    // mayors-office/businesses/1
    Route::get('/businesses/{business}', function ($business){
        return view('modules.businesses.show', ['businesses' => $business]);
    })->name('businesses.show');

     // mayors-office/businesses/1/patents/1
    Route::get('/businesses/{business}/patents/{patent}', function ($business, $patent) {
        return view('modules.businesses.patents.show', ['businesses' => $business, 'patent' => $patent]);
    })->name('businesses.patents.show');
    
    /*
    ** Routes for patents
    */
    // agencies/mayors-office/patents
    Route::get('/patents', function (){
        return view('modules.patents.index');
    })->name('patents.index');

    // agencies/mayors-office/patents/1
    Route::get('/patents/{patent}', function ($patent){
        return view('modules.patents.show', ['patent' => $patent]);
    })->name('patents.show');

    
});