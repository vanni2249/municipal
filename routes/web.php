<?php

/*
** Guest Routes
*/

use Illuminate\Support\Facades\Route;

require __DIR__ . '/guest.php';

/*
** Auth Routes
*/

require __DIR__ . '/auth/admin.php';
require __DIR__ . '/auth/users.php';

/*
** Partial Routes
*/

require __DIR__ . '/partials/notifications.php';

/*
** Users Routes
*/

Route::prefix('users')->group(function () {
    require __DIR__ . '/users/partials.php';
    require __DIR__ . '/users/services.php';
    require __DIR__ . '/users/applications.php';
    require __DIR__ . '/users/interactions.php';
    require __DIR__ . '/users/registers.php';
    require __DIR__ . '/users/settlements.php';
    require __DIR__ . '/users/rents.php';
    require __DIR__ . '/users/merchants.php';
    require __DIR__ . '/users/businesses.php';
});

/*
** Admin Routes
*/

Route::prefix('admin')->name('admin.')->group(function () {
    require __DIR__ . '/admin/dashboard.php';
    require __DIR__ . '/admin/interactions.php';
    require __DIR__ . '/admin/registers.php';
    require __DIR__ . '/admin/applications.php';
    require __DIR__ . '/admin/settlements.php';
    require __DIR__ . '/admin/rents.php';
    require __DIR__ . '/admin/inspections.php';
    require __DIR__ . '/admin/routes.php';
    require __DIR__ . '/admin/facilities.php';
    require __DIR__ . '/admin/equipments.php';
});
