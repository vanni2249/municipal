<?php

require __DIR__ . '/guest.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/citizen.php';
require __DIR__ . '/business.php';
require __DIR__ . '/admin.php';

/*
** Auth Routes
*/

// require __DIR__ . '/auth/admin.php';
// require __DIR__ . '/auth/users.php';

/*
** Partial Routes
*/

// require __DIR__ . '/partials/notifications.php';

/*
** Users Routes
*/

// Route::prefix('users')->middleware(AuthUser::class)->group(function () {
//     require __DIR__ . '/users/partials.php';
//     require __DIR__ . '/users/services.php';
//     require __DIR__ . '/users/applications.php';
//     require __DIR__ . '/users/interactions.php';
//     require __DIR__ . '/users/registers.php';
//     require __DIR__ . '/users/settlements.php';
//     require __DIR__ . '/users/rents.php';
//     require __DIR__ . '/users/merchants.php';
//     require __DIR__ . '/users/businesses.php';
//     require __DIR__ . '/users/actions.php';
// });

/*
** Admin Routes
*/

// Route::prefix('admin')->middleware(AuthAdmin::class)->name('admin.')->group(function () {
//     require __DIR__ . '/admin/dashboard.php';
//     require __DIR__ . '/admin/interactions.php';
//     require __DIR__ . '/admin/citizens.php';
//     require __DIR__ . '/admin/merchants.php';
//     require __DIR__ . '/admin/accountants.php';
//     require __DIR__ . '/admin/visitors.php';
//     // require __DIR__ . '/admin/registers.php';
//     require __DIR__ . '/admin/users.php';
//     require __DIR__ . '/admin/employees.php';
//     require __DIR__ . '/admin/applications.php';
//     require __DIR__ . '/admin/settlements.php';
//     require __DIR__ . '/admin/rents.php';
//     require __DIR__ . '/admin/inspections.php';
//     require __DIR__ . '/admin/invoices.php';
//     require __DIR__ . '/admin/routes.php';
//     require __DIR__ . '/admin/facilities.php';
//     require __DIR__ . '/admin/equipments.php';
// });
