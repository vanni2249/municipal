<?php

namespace App\Data\Links\Navbar;

class Merchant
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Inicio',
                'route' => '#',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Comercios',
                'route' => '#',
                'path' => 'businesses',
            ],
            [
                'name' => 'Patentes',
                'route' => '#',
                'path' => 'patents',
            ],
            [
                'name' => 'Permisos',
                'route' => '#',
                'path' => 'permits',
            ],
        ];
    }
}