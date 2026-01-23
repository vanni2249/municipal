<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard\Index as AdminDashboard;
use App\Livewire\Admin\Users\Index as AdminUsers;
use App\Livewire\Admin\Admins\Index as AdminAdmins;
use App\Livewire\Admin\Members\Index as AdminMembers;
use App\Livewire\Admin\Services\Index as AdminServices;
use App\Livewire\Admin\Applications\Index as AdminApplications;
use App\Livewire\Admin\Interactions\Index as AdminInteractions;
use App\Livewire\Admin\Inspections\Index as AdminInspections;
use App\Livewire\Admin\Routes\Index as AdminRoutes;
use App\Livewire\Admin\Transactions\Index as AdminTransactions;
use App\Livewire\Admin\Lists\Index as AdminLists;
use App\Livewire\Admin\Logs\Index as AdminLogs;
use App\Livewire\Admin\Settings\Index as AdminSettings;

Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
        Route::get('/users', AdminUsers::class)->name('users');
        Route::get('/administrators', AdminAdmins::class)->name('administrators');
        Route::get('/members', AdminMembers::class)->name('members');
        Route::get('/services', AdminServices::class)->name('services');
        Route::get('/applications', AdminApplications::class)->name('applications');
        Route::get('/interactions', AdminInteractions::class)->name('interactions');
        Route::get('/inspections', AdminInspections::class)->name('inspections');
        Route::get('/routes', AdminRoutes::class)->name('routes');
        Route::get('/lists', AdminLists::class)->name('lists');
        Route::get('/transactions', AdminTransactions::class)->name('transactions');
        Route::get('/logs', AdminLogs::class)->name('logs');
        Route::get('/settings', AdminSettings::class)->name('settings');
});