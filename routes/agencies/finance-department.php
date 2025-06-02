<?php

use Illuminate\Support\Facades\Route;

Route::prefix('finance-department')->name('finance-department.')->group(function () {
    Route::get('/dashboard', function () {
        return view('finance-department.dashboard');
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
    ** Routes registers
    */
    Route::get('/registers', function () {
        return view('modules.registers.index');
    })->name('registers.index');

    Route::get('/registers/{register}', function ($register) {
        return view('modules.registers.show', ['register' => $register]);
    })->name('registers.show');

    // /*
    // ** Routes Applications
    // */
    // Route::get('/applications', function () {
    //     return view('modules.applications.index');
    // })->name('applications.index');

    // Route::get('/applications/{application}', function ($application) {
    //     return view('modules.applications.show', ['application' => $application]);
    // })->name('applications.show');

    /*
    ** Routes settlements
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
    ** Routes for merchants
    */

    // finances/merchants
    Route::get('/merchants', function (){
        return view('modules.merchants.index');
    })->name('merchants.index');

    // finances/merchants/create
    Route::get('/merchants/create', function (){
        return view('modules.merchants.create');
    })->name('merchants.create');

    // finances/merchants/1
    Route::get('/merchants/{merchant}', function ($merchant){
        return view('modules.merchants.show', ['merchant' => $merchant]);
    })->name('merchants.show');
   
    // finances/merchants/1/edit
    Route::get('/merchants/{merchant}/edit', function ($merchant){
        return view('modules.merchants.edit', ['merchant' => $merchant]);
    })->name('merchants.edit');

    // finances/merchants/1/businesses/create
    Route::get('/merchants/{merchant}/businesses/create', function ($merchant){
        return view('modules.merchants.businesses.create', ['merchant' => $merchant]);
    })->name('merchants.businesses.create');

    // finances/merchants/1/businesses/1
    Route::get('/merchants/{merchant}/businesses/{business}', function ($merchant, $business){
        return view('modules.merchants.businesses.show', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.show');
   
    // finances/merchants/1/businesses/1/edit
    Route::get('/merchants/{merchant}/businesses/{business}/edit', function ($merchant, $business){
        return view('modules.merchants.businesses.edit', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.edit');
   
    // finances/merchants/1/businesses/1/patents/create
    Route::get('/merchants/{merchant}/businesses/{business}/patents/create', function ($merchant, $business){
        return view('modules.merchants.businesses.patents.create', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.patents.create');

    // finances/merchants/1/businesses/1/patents/1
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}', function ($merchant, $business, $patent){
        return view('modules.merchants.businesses.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
    })->name('merchants.businesses.patents.show');
    
    // finances/merchants/1/businesses/1/patents/1/edit
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}/edit', function ($merchant, $business, $patent){
        return view('modules.merchants.businesses.patents.edit', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
    })->name('merchants.businesses.patents.edit');

    // finances/merchants/1/businesses/1/patents/1/periods/index
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}/periods', function ($merchant, $business, $patent){
        return view('modules.merchants.businesses.patents.periods.index', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
    })->name('merchants.businesses.patents.periods.index');

    // finances/merchants/1/businesses/1/patents/1/periods/create
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}/periods/create', function ($merchant, $business, $patent){
        return view('modules.merchants.businesses.patents.periods.create', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
    })->name('merchants.businesses.patents.periods.create');

    // finances/merchants/1/businesses/1/patents/1/periods/show
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}/periods/{period}', function ($merchant, $business, $patent, $period){
        return view('modules.merchants.businesses.patents.periods.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent, 'period' => $period]);
    })->name('merchants.businesses.patents.periods.show');
    /*
    ** Routes for businesses
    */

    // agencies/finances/businesses
    Route::get('/businesses', function () {
        return view('modules.businesses.index');
    })->name('businesses.index');

    // agencies/finances/businesses/1
    Route::get('/businesses/{business}', function ($business) {
        return view('modules.businesses.show', ['business' => $business]);
    })->name('businesses.show');

    // agencies/finances/businesses/1/patents/1
    Route::get('/businesses/{business}/patents/{patent}', function ($business, $patent) {
        return view('modules.businesses.patents.show', ['businesses' => $business, 'patent' => $patent]);
    })->name('businesses.patents.show');

    /*
    ** Routes for patents
    */
    Route::get('/patents', function () {
        return view('modules.patents.index');
    })->name('patents.index');

    Route::get('/patents/{patent}', function ($patent) {
        return view('modules.patents.show', ['patent' => $patent]);
    })->name('patents.show');
});
