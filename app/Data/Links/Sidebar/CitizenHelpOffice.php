<?php
namespace App\Data\Links\Sidebar;

class CitizenHelpOffice
{
    public static function items(): array
    {
        return [
            [
                'name' => 'Tablero',
                'route' => 'citizen-help-office.dashboard',
                'path' => 'dashboard',
            ],
            [
                'name' => 'Registros',
                'route' => 'citizen-help-office.registers.index',
                'path' => 'registers',
            ],
            [
                'name' => 'Inspecciones',
                'route' => 'citizen-help-office.inspections.index',
                'path' => 'inspections',
            ],
            [
                'name' => 'Rutas',
                'route' => 'citizen-help-office.routes.index',
                'path' => 'routes',
            ]
        ];
    }
}