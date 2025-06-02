<?php

namespace App\Data\Links\Sidebar;

class PublicWorksDepartment
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'public-works-department.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Solicitudes',
                'route' => 'public-works-department.applications.index',
                'path' => 'applications',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'public-works-department.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'public-works-department.routes.index',
                'path' => 'routes',
            ],
            
            [
                'name' => 'Equipos',
                'route' => 'public-works-department.equipments.index',
                'path' => 'equipments',
            ],
        ];
    }
}
