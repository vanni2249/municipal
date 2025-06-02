<?php

use Illuminate\Support\Facades\Route;

Route::prefix('citizen-help-office')->name('citizen-help-office.')->group(function () {
    Route::get('/dashboard', function () {
        return view('citizen-help-office.dashboard');
    })->name('dashboard');

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
    ** Routes for users
    */
    Route::get('/users', function (){
        return view('modules.users.index');
    })->name('users.index');

    Route::get('/users/{user}', function ($user){
        return view('modules.users.show', ['user' => $user]);
    })->name('users.show');

    // Route::get('/users/create', function (){
    //     return view('agencies.help-citizens.users.create');
    // })->name('users.create');

    // Route::get('/users/{user}/edit', function ($user){
    //     return view('agencies.help-citizens.users.edit', ['user' => $user]);
    // })->name('users.edit');
});