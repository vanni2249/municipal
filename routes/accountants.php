<?php

use Illuminate\Support\Facades\Route;

Route::prefix('accountants')->name('accountants.')->group(function () {
    /**
     * Authentication Routes
     */
    Route::get('/login', function () {
        return view('accountants.auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('accountants.auth.register');
    })->name('register');
    
    Route::get('/dashboard', function () {
        return view('accountants.dashboard');
    })->name('dashboard');

    /**
     * Merchants Routes
     */
    // accountants/merchants 
    Route::get('/merchants', function () {
        return view('accountants.modules.merchants.index');
    })->name('merchants.index');

    // accountants/merchants/create
    Route::get('/merchants/create', function () {
        return view('accountants.modules.merchants.create');
    })->name('merchants.create');

    // accountants/merchants/{merchant}
    Route::get('/merchants/{merchant}', function () {
        return view('accountants.modules.merchants.show');
    })->name('merchants.show');

    // accountants/merchants/{merchant}/edit
    Route::get('/merchants/{merchant}/edit', function () {
        return view('accountants.modules.merchants.edit');
    })->name('merchants.edit');
    
     // accountants/merchants/1/businesses/create
    Route::get('/merchants/{merchant}/businesses/create', function ($merchant){
        return view('accountants.modules.merchants.businesses.create', ['merchant' => $merchant]);
    })->name('merchants.businesses.create');

    // accountants/merchants/1/businesses/1
    Route::get('/merchants/{merchant}/businesses/{business}', function ($merchant, $business){
        return view('accountants.modules.merchants.businesses.show', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.show');

    // accountants/merchants/1/businesses/1/edit
    Route::get('/merchants/{merchant}/businesses/{business}/edit', function ($merchant, $business){
        return view('accountants.modules.merchants.businesses.edit', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.edit');

    // accountants/merchants/1/businesses/1/patents/create
    Route::get('/merchants/{merchant}/businesses/{business}/patents/create', function ($merchant, $business){
        return view('accountants.modules.merchants.businesses.patents.create', ['merchant' => $merchant, 'business' => $business]);
    })->name('merchants.businesses.patents.create');

    // accountants/merchants/1/businesses/1/patents/1
    Route::get('/merchants/{merchant}/businesses/{business}/patents/{patent}', function ($merchant, $business, $patent){
        return view('accountants.modules.merchants.businesses.patents.show', ['merchant' => $merchant, 'business' => $business, 'patent' => $patent]);
    })->name('merchants.businesses.patents.show');
    /**
     * Businesses Routes
     */
    // accountants/businesses
    Route::get('/businesses', function () {
        return view('accountants.modules.businesses.index');
    })->name('businesses.index');
    // accountants/businesses/create
    Route::get('/businesses/create', function () {
        return view('accountants.modules.businesses.create');
    })->name('businesses.create');
    // accountants/businesses/{business}
    Route::get('/businesses/{business}', function () {
        return view('accountants.modules.businesses.show');
    })->name('businesses.show');
    // accountants/businesses/{business}/edit
    Route::get('/businesses/{business}/edit', function () {
        return view('accountants.modules.businesses.edit');
    })->name('businesses.edit');
    /**
     * Patents Routes
     */
    // accountants/patents
    Route::get('/patents', function () {
        return view('accountants.modules.patents.index');
    })->name('patents.index');
    // accountants/patents/create
    Route::get('/patents/create', function () {
        return view('accountants.modules.patents.create');
    })->name('patents.create');
    // accountants/patents/{patent}
    Route::get('/patents/{patent}', function () {
        return view('accountants.modules.patents.show');
    })->name('patents.show');
    // accountants/patents/{patent}/edit
    Route::get('/patents/{patent}/edit', function () {
        return view('accountants.modules.patents.edit');
    })->name('patents.edit');
});