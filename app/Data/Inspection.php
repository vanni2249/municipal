<?php

namespace App\Data;

class Inspection {

    static function items()
    {
        return [
            [
                'date' => '5',
                'number' => 'INS-001',
                'category' => 'Inspección de permiso de construcción',
                'route' => false,
                'status' => 'Pendiente',
                'status_color' => 'yellow',
                'created_by' => 'Kariani A Colon',
            ],
            [
                'date' => '6',
                'number' => 'INS-002',
                'category' => 'Inspección de permiso de construcción',
                'route' => false,
                'status' => 'Completado',
                'status_color' => 'green',
                'created_by' => 'Carlos Lopez',
            ],
            [
                'date' => '7',
                'number' => 'INS-003',
                'category' => 'Inspección de permiso de construcción',
                'route' => true,
                'status' => 'En proceso',
                'status_color' => 'yellow',
                'created_by' => 'Ana Torres',
            ],
            [
                'date' => '8',
                'number' => 'INS-004',
                'category' => 'Inspección de permiso de construcción',
                'route' => false,
                'status' => 'Completado',
                'status_color' => 'green',
                'created_by' => 'Luis Martinez',
            ],
            [
                'date' => '9',
                'number' => 'INS-005',
                'category' => 'Inspección de permiso de construcción',
                'route' => true,
                'status' => 'Pendiente',
                'status_color' => 'yellow',
                'created_by' => 'Maria Perez',
            ],
            [
                'date' => '10',
                'number' => 'INS-006',
                'category' => 'Inspección de permiso de construcción',
                'route' => false,
                'status' => 'Completado',
                'status_color' => 'green',
                'created_by' => 'Geovanni Colon Barrios',
            ],
        ];
    }
}