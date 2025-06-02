<?php

namespace App\Data;

class Route {

    static function items()
    {
        return [
            [
                'date' => '5',
                'number' => 'RUT-001',
                'category' => 'Inspección',
                'created_by' => 'Kariani A Colon',
                'created_at' => '2023-10-01 10:00:00',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '6',
                'number' => 'RUT-002',
                'category' => 'Mantenimiento',
                'created_by' => 'Kariani A Colon',
                'created_at' => '2023-10-02 11:00:00',
                'status' => 'Completado',
                'status_color' => 'green',
            ],
            [
                'date' => '7',
                'number' => 'RUT-003',
                'category' => 'Revisión de seguridad',
                'created_by' => 'Kariani A Colon',
                'created_at' => '2023-10-03 12:00:00',
                'status' => 'En proceso',
                'status_color' => 'yellow',
            ],
            [
                'date' => '8',
                'number' => 'RUT-004',
                'category' => 'Inspección de calidad',
                'created_by' => 'Kariani A Colon',
                'created_at' => '2023-10-04 13:00:00',
                'status' => 'Pendiente',
                'status_color' => 'red',
            ],
        ];
    }
}