<?php

namespace App\Data\Links\Sidebar;


class Agency
{
    public static function items()
    {
        return [
            [
                'name' => 'Tablero',
                'route' => request()->segment(1) . '.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Iterracciones',
                'route' => request()->segment(1) . '.interactions.index',
                'path' => 'interactions',
            ],
            [
                'name' => 'Registros',
                'route' => request()->segment(1) . '.registers.index',
                'path' => 'registers',
            ],
            [
                'name' => 'Solicitudes',
                'route' => request()->segment(1) . '.applications.index',
                'path' => 'applications',
            ],
            [
                'name' => 'Radicaciones',
                'route' => request()->segment(1) . '.settlements.index',
                'path' => 'settlements',
            ],
            [
                'name' => 'Rents',
                'route' => request()->segment(1) . '.rents.index',
                'path' => 'rents',
            ],
            [
                'name' => 'Inspecciones',
                'route' => request()->segment(1) . '.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => request()->segment(1) . '.routes.index',
                'path' => 'routes',
            ],
            [
                'name' => 'Facilidades',
                'route' => request()->segment(1) . '.facilities.index',
                'path' => 'facilities',
            ],
            [
                'name' => 'Equipos',
                'route' => request()->segment(1) . '.equipments.index',
                'path' => 'equipments',         
            ]
        ];
    }
}