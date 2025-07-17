<?php

namespace App\Data\Sidebar;


class User
{
    public static function items()
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'users.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Servicios',
                'route' => 'users.services.index',
                'path' => 'services',
            ],
            [
                'name' => 'Comerciantes',
                'route' => 'users.merchants.index',
                'path' => 'merchants',
            ],
            [
                'name' => 'Negocios',
                'route' => 'users.businesses.index',
                'path' => 'businesses',
            ],
            [
                'name' => 'Interacciones',
                'route' => 'users.interactions.index',
                'path' => 'interactions',
            ],
            [
                'name' => 'Registros',
                'route' => 'users.registers.index',
                'path' => 'registers',
            ],
            [
                'name' => 'Solicitudes',
                'route' => 'users.applications.index',
                'path' => 'applications',
            ],
            [
                'name' => 'Radicaciones',
                'route' => 'users.settlements.index',
                'path' => 'settlements',
            ],
            [
                'name' => 'Rents',
                'route' => 'users.rents.index',
                'path' => 'rents',
            ]
        ];
    }
}