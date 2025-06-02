<?php

namespace App\Data\Links\Sidebar;


class Accountant
{
    public static function items()
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'accountants.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Comerciantes',
                'route' => 'accountants.merchants.index',
                'path' => 'merchants',
            ],
            [
                'name' => 'Comercios',
                'route' => 'accountants.businesses.index',
                'path' => 'businesses',
            ],
            [
                'name' => 'Patentes',
                'route' => 'accountants.patents.index',
                'path' => 'patents',
            ],
        ];
    }
}