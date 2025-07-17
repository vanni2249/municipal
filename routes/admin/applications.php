<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/applications')->name('applications.')->group(function () {
    Route::get('/', function () {
        return view('admin.applications.index');
    })->name('index');
    Route::get('/{application}', function ($application) {
        return view('admin.applications.show', ['application' => $application]);
    })->name('show');
});
