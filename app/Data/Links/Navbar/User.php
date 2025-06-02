<?php

namespace App\Data\Links\Navbar;

class User
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Inicio',
                'route' => 'users.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Servicios',
                'route' => 'users.services.index',
                'path' => 'services',
            ]
        ];
    }
}
