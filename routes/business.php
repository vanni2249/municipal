<?php

use App\Models\Account;
use App\Models\Business;
use Illuminate\Support\Facades\Route;
use App\Livewire\Businesses\Dashboard\Index as BusinessDashboard;
use App\Livewire\Businesses\Services\Index as BusinessServicesIndex;
use App\Livewire\Businesses\Services\Create as BusinessServicesCreate;
use App\Livewire\Businesses\Services\Show as BusinessServicesShow;
use App\Livewire\Businesses\Applications\Index as BusinessApplicationsIndex;
use App\Livewire\Businesses\Applications\Show as BusinessApplicationsShow;
use App\Livewire\Businesses\Permits\Index as BusinessPermitsIndex;
use App\Livewire\Businesses\Permits\Show as BusinessPermitsShow;
use App\Livewire\Businesses\Patents\Index as BusinessPatentsIndex;
use App\Livewire\Businesses\Patents\Show as BusinessPatentsShow;
use App\Livewire\Businesses\Interactions\Index as BusinessInteractionsIndex;
use App\Livewire\Businesses\Interactions\Show as BusinessInteractionsShow;
use App\Livewire\Businesses\Settings\Index as BusinessSettings;

Route::prefix('businesses')->name('businesses.')->group(function () {
        Route::get('/set-session/{business}', function ($business) {
                $business = Business::where('ulid', $business)->first();

                session()->forget('data');
                session(['data.business_ulid' => $business->ulid]);

                return redirect()->route('businesses.dashboard');
        })->name('set-session');
        Route::get('/dashboard', BusinessDashboard::class)->name('dashboard');
        Route::get('/services', BusinessServicesIndex::class)->name('services');
        Route::get('/services/{service}/create', BusinessServicesCreate::class)->name('services.create');
        Route::get('/services/{service}', BusinessServicesShow::class)->name('services.show');
        Route::get('/applications', BusinessApplicationsIndex::class)->name('applications');
        Route::get('/applications/{application}', BusinessApplicationsShow::class)->name('applications.show');
        Route::get('/permits', BusinessPermitsIndex::class)->name('permits');
        Route::get('/permits/{permit}', BusinessPermitsShow::class)->name('permits.show');
        Route::get('/patents', BusinessPatentsIndex::class)->name('patents');
        Route::get('/patents/{patent}', BusinessPatentsShow::class)->name('patents.show');
        Route::get('/interactions', BusinessInteractionsIndex::class)->name('interactions');
        Route::get('/interactions/{interaction}', BusinessInteractionsShow::class)->name('interactions.show');
        Route::get('/settings', BusinessSettings::class)->name('settings');
});
