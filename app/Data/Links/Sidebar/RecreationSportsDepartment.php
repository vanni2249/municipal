<?php

namespace App\Data\Links\Sidebar;

class RecreationSportsDepartment
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'recreation-sports-department.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Solicitudes',
                'route' => 'recreation-sports-department.applications.index',
                'path' => 'applications',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'recreation-sports-department.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'recreation-sports-department.routes.index',
                'path' => 'routes',
            ],
            [
                'name' => 'Faciliadades',
                'route' => 'recreation-sports-department.dashboard',
                'path' => 'facilities',
            ],
        ];
    }
}
