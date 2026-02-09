<?php

use App\Http\Middleware\AuthUser;
use App\Models\Account;
use Illuminate\Support\Facades\Route;
use App\Livewire\Citizens\Dashboard\Index as CitizensDashboard;
use App\Livewire\Citizens\Services\Index as CitizensServicesIndex;
use App\Livewire\Citizens\Services\Create as CitizensServicesCreate;
use App\Livewire\Citizens\Services\Show as CitizensServicesShow;
use App\Livewire\Citizens\Applications\Index as CitizensApplicationsIndex;
use App\Livewire\Citizens\Applications\Show as CitizensApplicationsShow;
use App\Livewire\Citizens\Permits\Index as CitizensPermitsIndex;
use App\Livewire\Citizens\Permits\Show as CitizensPermitsShow;
use App\Livewire\Citizens\Interactions\Index as CitizensInteractions;
use App\Livewire\Citizens\Interactions\Show as CitizensInteractionsShow;
use App\Livewire\Citizens\Settings\Index as CitizensSettings;

Route::prefix('citizens')->name('citizens.')->middleware(AuthUser::class)->group(function () {
    Route::get('/set-session/{account}', function ($account) {
        $account = Account::where('ulid', $account)->first();

        session()->forget('data');
        session(['data.account_ulid' => $account->ulid]);
        return redirect()->route('citizens.dashboard');
    })->name('set-session');
    Route::get('/dashboard', CitizensDashboard::class)->name('dashboard');
    Route::get('/services', CitizensServicesIndex::class)->name('services');
    Route::get('/services/{service}/create', CitizensServicesCreate::class)->name('services.create');
    Route::get('/services/{service}', CitizensServicesShow::class)->name('services.show');
    Route::get('/applications', CitizensApplicationsIndex::class)->name('applications');
    Route::get('/applications/{application}', CitizensApplicationsShow::class)->name('applications.show');
    Route::get('/permits', CitizensPermitsIndex::class)->name('permits');
    Route::get('/permits/{permit}', CitizensPermitsShow::class)->name('permits.show');
    Route::get('/interactions', CitizensInteractions::class)->name('interactions');
    Route::get('/interactions/{interaction}', CitizensInteractionsShow::class)->name('interactions.show');
    Route::get('/settings', CitizensSettings::class)->name('settings');
});