<?php
namespace App\Data\Links\Sidebar;

class MayorOffice
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'mayors-office.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Interacciones',
                'route' => 'mayors-office.interactions.index',
                'path' => 'interactions',
            ],
            [
                'name' => 'Registros',
                'route' => 'mayors-office.registers.index',
                'path' => 'registers',
            ],
            [
                'name' => 'Solicitudes',
                'route' => 'mayors-office.applications.index',
                'path' => 'applications',
            ],
             [
                'name' => 'Radicaciones',
                'route' => 'mayors-office.settlements.index',
                'path' => 'settlements',
            ],
            [
                'name' => 'Rentas',
                'route' => 'mayors-office.rents.index',
                'path' => 'rents',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'mayors-office.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'mayors-office.routes.index',
                'path' => 'routes',
            ],
            [
                'name' => 'Facilidades',
                'route' => 'mayors-office.facilities.index',
                'path' => 'facilities',
            ],
            [
                'name' => 'Equipos',
                'route' => 'mayors-office.equipments.index',
                'path' => 'equipments',
            ],
        ];
    }
}