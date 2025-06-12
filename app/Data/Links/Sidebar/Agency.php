<?php

namespace App\Data\Links\Sidebar;


class Agency
{
    public static function items()
    {
        return [
            [
                'agencies' => ['it-office', 'mayors-office', 'finance-department'],
                'name' => 'Tablero',
                'route' => request()->segment(1) . '.dashboard',
                'path' => 'dashboard',
            ],
            [
                'agencies' => ['it-office', 'mayors-office', 'finance-department'],
                'name' => 'Iterracciones',
                'route' => request()->segment(1) . '.interactions.index',
                'path' => 'interactions',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Registros',
                'route' => request()->segment(1) . '.registers.index',
                'path' => 'registers',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Solicitudes',
                'route' => request()->segment(1) . '.applications.index',
                'path' => 'applications',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Radicaciones',
                'route' => request()->segment(1) . '.settlements.index',
                'path' => 'settlements',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Rents',
                'route' => request()->segment(1) . '.rents.index',
                'path' => 'rents',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Inspecciones',
                'route' => request()->segment(1) . '.inspections.index',
                'path' => 'inspections',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Rutas',
                'route' => request()->segment(1) . '.routes.index',
                'path' => 'routes',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Facilidades',
                'route' => request()->segment(1) . '.facilities.index',
                'path' => 'facilities',
            ],
            [
                'agencies' => ['it-office', 'mayors-office'],
                'name' => 'Equipos',
                'route' => request()->segment(1) . '.equipments.index',
                'path' => 'equipments',         
            ]
        ];
    }
}