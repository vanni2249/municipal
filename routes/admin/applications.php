<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/applications')->name('applications.')->group(function () {
    Route::get('/', function () {
        return view('agencies.applications.index');
    })->name('index');
    Route::get('/{application}', function ($application) {
        return view('agencies.applications.show', ['application' => $application]);
    })->name('show');
});
