<?php

namespace App\Data\Links\Navbar;

class Merchant
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Inicio',
                'route' => 'merchants.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Comercios',
                'route' => 'merchants.businesses.index',
                'path' => 'businesses',
            ],
            [
                'name' => 'Patentes',
                'route' => 'merchants.patents.index',
                'path' => 'patents',
            ],
            [
                'name' => 'Permisos',
                'route' => 'merchants.permits.index',
                'path' => 'permits',
            ],
        ];
    }
}