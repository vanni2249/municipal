<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Citizens\Dashboard\Index as CitizensDashboard;
use App\Livewire\Citizens\Services\Index as CitizensServices;
use App\Livewire\Citizens\Applications\Index as CitizensApplications;
use App\Livewire\Citizens\Interactions\Index as CitizensInteractions;
use App\Livewire\Citizens\Settings\Index as CitizensSettings;

Route::prefix('citizens')->name('citizen.')->group(function () {
    Route::get('/dashboard', CitizensDashboard::class)->name('dashboard');
    Route::get('/services', CitizensServices::class)->name('services');
    Route::get('/applications', CitizensApplications::class)->name('applications');
    Route::get('/interactions', CitizensInteractions::class)->name('interactions');
    Route::get('/settings', CitizensSettings::class)->name('settings');
});