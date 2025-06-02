<?php
namespace App\Data\Links\Sidebar;

class ItOffice
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'it-office.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Interacciones',
                'route' => 'it-office.interactions.index',
                'path' => 'interactions',
            ],
            [
                'name' => 'Registros',
                'route' => 'it-office.registers.index',
                'path' => 'registers',
            ],
            [
                'name' => 'Solicitudes',
                'route' => 'it-office.applications.index',
                'path' => 'applications',
            ],
            [
                'name' => 'Radicaciones',
                'route' => 'it-office.settlements.index',
                'path' => 'settlements',
            ],
            [
                'name' => 'Rentas',
                'route' => 'it-office.rents.index',
                'path' => 'rents',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'it-office.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'it-office.routes.index',
                'path' => 'routes',
            ],
            [
                'name' => 'Facilidades',
                'route' => 'it-office.facilities.index',
                'path' => 'facilities',
            ],
            [
                'name' => 'Equipos',
                'route' => 'it-office.equipments.index',
                'path' => 'equipments',
            ]
        ];


    }
}