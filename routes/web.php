<?php

/*
** Guest Routes
*/

use Illuminate\Support\Facades\Route;

require __DIR__ . '/guest.php';


/*
** Auth Routes
*/
require __DIR__ . '/auth/citizens.php';
require __DIR__ . '/auth/merchants.php';
require __DIR__ . '/auth/accountants.php';
require __DIR__ . '/auth/contractors.php';
require __DIR__ . '/auth/suppliers.php';
require __DIR__ . '/auth/employees.php';

// if (in_array(request()->segment(1), ['citizens', 'merchants', 'accountants', 'contractors', 'suppliers'])) {
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
// }

/*
** Admin Routes
*/

// $array = [
//     'it-office', 
//     'mayors-office', 
//     'finance-department',
//     'citizen-help-office',
//     'public-works-department',
//     'public-works-department',
//     'recreation-sports-department',
// ];
// if (in_array(request()->segment(1), $array)) {

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
    
// }

// require __DIR__.'/users/citizens.php';
// require __DIR__.'/users/merchants.php';
// require __DIR__.'/users/accountants.php';
// require __DIR__.'/users/contractors.php';
// require __DIR__.'/users/suppliers.php';
// require __DIR__.'/users/employees.php';
// require __DIR__.'/agencies/finance-department.php';
// require __DIR__.'/agencies/general-services-department.php';
// require __DIR__.'/agencies/citizen-help-office.php';
// require __DIR__.'/agencies/mayors-office.php';
// require __DIR__.'/agencies/municipal-administrators-office.php';
// require __DIR__.'/agencies/public-works-department.php';
// require __DIR__.'/agencies/recreation-sports-department.php';
// require __DIR__.'/agencies/it-office.php';
