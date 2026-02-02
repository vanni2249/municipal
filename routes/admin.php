<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard\Index as AdminDashboard;

use App\Livewire\Admin\Users\Index as AdminUsers;
use App\Livewire\Admin\Users\Show as AdminUserShow;
use App\Livewire\Admin\Users\Sessions\Index as AdminUserSessions;
use App\Livewire\Admin\Users\Sessions\Show as AdminUserSessionsShow;
use App\Livewire\Admin\Users\Members\Index as AdminUserMembers;
use App\Livewire\Admin\Users\Members\Show as AdminUserMembersShow;
use App\Livewire\Admin\Users\Statuses\Index as AdminUserStatuses;
use App\Livewire\Admin\Users\Statuses\Show as AdminUserStatusesShow;
use App\Livewire\Admin\Admins\Sessions\Index as AdminAdminsSessions;
use App\Livewire\Admin\Admins\Sessions\Show as AdminAdminsSessionsShow;
use App\Livewire\Admin\Admins\Statuses\Index as AdminAdminsStatuses;
use App\Livewire\Admin\Admins\Statuses\Show as AdminAdminsStatusesShow;

use App\Livewire\Admin\Admins\Index as AdminAdmins;
use App\Livewire\Admin\Admins\Show as AdminAdminsShow;

use App\Livewire\Admin\Accounts\Index as AdminAccounts;
use App\Livewire\Admin\Accounts\Show as AdminAccountShow;

use App\Livewire\Admin\Services\Index as AdminServices;
use App\Livewire\Admin\Services\Show as AdminServicesShow;

use App\Livewire\Admin\Applications\Index as AdminApplications;
use App\Livewire\Admin\Applications\Show as AdminApplicationsShow;

use App\Livewire\Admin\Interactions\Index as AdminInteractions;
use App\Livewire\Admin\Interactions\Show as AdminInteractionsShow;

use App\Livewire\Admin\Inspections\Index as AdminInspections;
use App\Livewire\Admin\Inspections\Show as AdminInspectionsShow;

use App\Livewire\Admin\Routes\Index as AdminRoutes;
use App\Livewire\Admin\Routes\Show as AdminRoutesShow;

use App\Livewire\Admin\Lists\Index as AdminLists;
use App\Livewire\Admin\Lists\Show as AdminListsShow;

use App\Livewire\Admin\Transactions\Index as AdminTransactions;
use App\Livewire\Admin\Transactions\Show as AdminTransactionsShow;

use App\Livewire\Admin\Logs\Index as AdminLogs;
use App\Livewire\Admin\Logs\Show as AdminLogsShow;

use App\Livewire\Admin\Settings\Index as AdminSettings;
use App\Livewire\Admin\Settings\Show as AdminSettingsShow;

Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', AdminDashboard::class)->name('dashboard');

        // Users
        Route::get('/users', AdminUsers::class)->name('users');
        Route::get('/users/{user}', AdminUserShow::class)->name('users.show');
        Route::prefix('users/{user}/sessions')->name('sessions.')->group(function () {
                Route::get('/', AdminUserSessions::class)->name('index');
                Route::get('/{session}', AdminUserSessionsShow::class)->name('index');
        });
        Route::prefix('users/{user}/members')->name('members.')->group(function () {
                Route::get('/', AdminUserMembers::class)->name('index');
                Route::get('/{member}', AdminUserMembersShow::class)->name('index');
        });
        Route::prefix('users/{user}/statuses')->name('statuses.')->group(function () {
                Route::get('/', AdminUserStatuses::class)->name('index');
                Route::get('/{status}', AdminUserStatusesShow::class)->name('index');
        });

        // Administrators
        Route::get('/administrators', AdminAdmins::class)->name('administrators');
        Route::get('/administrators/{administrator}', AdminAdminsShow::class)->name('administrators.show');
        Route::prefix('administrators/{administrator}/sessions')->name('sessions.')->group(function () {
                Route::get('/', AdminAdminsSessions::class)->name('index');
                Route::get('/{session}', AdminAdminsSessionsShow::class)->name('index');
        });
        Route::prefix('administrators/{administrator}/statuses')->name('statuses.')->group(function () {
                Route::get('/', AdminAdminsStatuses::class)->name('index');
                Route::get('/{status}', AdminAdminsStatusesShow::class)->name('index');
        });

        // Accounts
        Route::get('/accounts', AdminAccounts::class)->name('accounts');
        Route::get('/accounts/{account}', AdminAccountShow::class)->name('accounts.show');

        // Services
        Route::get('/services', AdminServices::class)->name('services');
        Route::get('/services/{service}', AdminServicesShow::class)->name('services.show');

        // Applications
        Route::get('/applications', AdminApplications::class)->name('applications');
        Route::get('/applications/{application}', AdminApplicationsShow::class)->name('applications.show');

        // Interactions
        Route::get('/interactions', AdminInteractions::class)->name('interactions');
        Route::get('/interactions/{interaction}', AdminInteractionsShow::class)->name('interactions.show');

        // Inspections
        Route::get('/inspections', AdminInspections::class)->name('inspections');
        Route::get('/inspections/{inspection}', AdminInspectionsShow::class)->name('inspections.show');

        // Routes
        Route::get('/routes', AdminRoutes::class)->name('routes');
        Route::get('/routes/{route}', AdminRoutesShow::class)->name('routes.show');

        // Lists
        Route::get('/lists', AdminLists::class)->name('lists');
        Route::get('/lists/{list}', AdminListsShow::class)->name('lists.show');

        // Transactions
        Route::get('/transactions', AdminTransactions::class)->name('transactions');
        Route::get('/transactions/{transaction}', AdminTransactionsShow::class)->name('transactions.show');

        // Logs
        Route::get('/logs', AdminLogs::class)->name('logs');
        Route::get('/logs/{log}', AdminLogsShow::class)->name('logs.show');

        // Settings
        Route::get('/settings', AdminSettings::class)->name('settings');
        Route::get('/settings/{setting}', AdminSettingsShow::class)->name('settings.show');
});