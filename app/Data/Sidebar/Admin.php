<?php

namespace App\Data\Sidebar;


class Admin
{
    public static function items()
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'admin.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Iterracciones',
                'route' => 'admin.interactions.index',
                'path' => 'interactions',
            ],
            [
                'name' => 'Usuarios',
                'route' => 'admin.registers.index',
                'path' => 'users',
            ],
            [
                'name' => 'Registros',
                'route' => 'admin.registers.index',
                'path' => 'registers',
            ],
            [
                'name' => 'Empleados',
                'route' => 'admin.employees.index',
                'path' => 'employees',
            ],
            [
                'name' => 'Ciudadanos',
                'route' => 'admin.citizens.index',
                'path' => 'citizens',
            ],
            [
                'name' => 'Comerciantes',
                'route' => 'admin.merchants.index',
                'path' => 'merchants',
            ],
            [
                'name' => 'Solicitudes',
                'route' => 'admin.applications.index',
                'path' => 'applications',
            ],
            [
                'name' => 'Radicaciones',
                'route' => 'admin.settlements.index',
                'path' => 'settlements',
            ],
            [
                'name' => 'Rents',
                'route' => 'admin.rents.index',
                'path' => 'rents',
            ],
            [
                'name' => 'Facturas',
                'route' => 'admin.registers.index',
                'path' => 'invoices',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'admin.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'admin.routes.index',
                'path' => 'routes',
            ],
            [
                'name' => 'Facilidades',
                'route' => 'admin.facilities.index',
                'path' => 'facilities',
            ],
            [
                'name' => 'Equipos',
                'route' => 'admin.equipments.index',
                'path' => 'equipments',         
            ]
        ];
    }
}