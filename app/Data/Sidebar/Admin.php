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
                'name' => 'Ciudadanos',
                'route' => 'admin.citizens.index',
                'path' => 'citizens',
            ],
            [
                'name' => 'Visitantes',
                'route' => 'admin.visitors.index',
                'path' => 'visitors',
            ],
            [
                'name' => 'Comerciantes',
                'route' => 'admin.merchants.index',
                'path' => 'merchants',
            ],
            // [
            //     'name' => 'Contadores',
            //     'route' => 'admin.accountants.index',
            //     'path' => 'accountants',
            // ],
            // [
            //     'name' => 'Contratistas',
            //     'route' => 'admin.contractors.index',
            //     'path' => 'contractors',
            // ],
            // [
            //     'name' => 'Suplidores',
            //     'route' => 'admin.suppliers.index',
            //     'path' => 'suppliers',
            // ],
            [
                'name' => 'Usuarios',
                'route' => 'admin.users.index',
                'path' => 'users',
            ],
            // [
            //     'name' => 'Registros',
            //     'route' => 'admin.registers.index',
            //     'path' => 'registers',
            // ],
            [
                'name' => 'Empleados',
                'route' => 'admin.employees.index',
                'path' => 'employees',
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
                'route' => 'admin.invoices.index',
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