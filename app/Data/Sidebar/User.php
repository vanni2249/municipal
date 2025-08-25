<?php

namespace App\Data\Sidebar;


class User
{
    public static function items()
    {
        return [
            [
                'users' => ['citizen', 'merchant', 'accountant', 'contractor', 'supplier', 'visitor'],
                'name' => 'Tablero',
                'route' => 'users.dashboard',
                'path' => 'dashboard',
            ],
            [
                'users' => ['citizen', 'merchant', 'accountant', 'contractor', 'supplier', 'visitor'],
                'name' => 'Interactuar',
                'route' => 'users.interactions.index',
                'path' => 'interactions',
            ],
            [
                'users' => ['citizen', 'contractor', 'supplier', 'visitor'],
                'name' => 'Servicios',
                'route' => 'users.services.index',
                'path' => 'services',
            ],
            [
                'users' => ['accountant'],
                'name' => 'Comerciantes',
                'route' => 'users.merchants.index',
                'path' => 'merchants',
            ],
            [
                'users' => ['merchant', 'accountant'],
                'name' => 'Negocios',
                'route' => 'users.businesses.index',
                'path' => 'businesses',
            ],
            // [
            //     'users' => ['citizen',],
            //     'name' => 'Registros',
            //     'route' => 'users.registers.index',
            //     'path' => 'registers',
            // ],
            [
                'users' => ['citizen', 'merchant', 'accountant', 'contractor', 'supplier', 'visitor'],
                'name' => 'Acciones',
                'route' => 'users.actions.index',
                'path' => 'actions',
            ],
            [
                'users' => ['citizen', 'merchant', 'accountant', 'contractor', 'supplier', 'visitor'],
                'name' => 'Solicitudes',
                'route' => 'users.applications.index',
                'path' => 'applications',
            ],
            [
                'users' => ['citizen', 'merchant', 'accountant', 'contractor', 'supplier', 'visitor'],
                'name' => 'Radicaciones',
                'route' => 'users.settlements.index',
                'path' => 'settlements',
            ],
            [
                'users' => ['citizen', 'merchant', 'accountant', 'visitor'],
                'name' => 'Rents',
                'route' => 'users.rents.index',
                'path' => 'rents',
            ]
        ];
    }
}
