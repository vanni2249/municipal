<?php

namespace App\Data\Links\Sidebar;

class FinanceDepartment
{
    public static function items()
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'finance-department.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Interacciones',
                'route' => 'finance-department.interactions.index',
                'path' => 'interactions',
            ],
            [
                'name' => 'Registros',
                'route' => 'finance-department.registers.index',
                'path' => 'registers',
            ],
            // [
            //     'name' => 'Solicitudes',
            //     'route' => 'finance-department.applications.index',
            //     'path' => 'applications',
            // ],
            [
                'name' => 'Radicaciones',
                'route' => 'finance-department.settlements.index',
                'path' => 'settlements',
            ],
            [
                'name' => 'Rentas',
                'route' => 'finance-department.rents.index',
                'path' => 'rents',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'finance-department.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'finance-department.routes.index',
                'path' => 'routes',
            ],
        ];
    }
}
