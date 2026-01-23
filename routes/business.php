<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Businesses\Dashboard\Index as BusinessDashboard;
use App\Livewire\Businesses\Services\Index as BusinessServices;
use App\Livewire\Businesses\Applications\Index as BusinessApplications;
use App\Livewire\Businesses\Interactions\Index as BusinessInteractions;
use App\Livewire\Businesses\Settings\Index as BusinessSettings;

Route::prefix('businesses')->name('businesses.')->group(function () {
        Route::get('/dashboard', BusinessDashboard::class)->name('dashboard');
        Route::get('/services', BusinessServices::class)->name('services');
        Route::get('/applications', BusinessApplications::class)->name('applications');
        Route::get('/interactions', BusinessInteractions::class)->name('interactions');
        Route::get('/settings', BusinessSettings::class)->name('settings');
});
