<?php

namespace App\Data;

class Equipment {

    static function items()
    {
        return [
            [
                'category' => 'Equipamiento Deportivo',
                'numero' => 'EQ-001',
                'agencia' => 'Departamento de Recración y Deportes',
                'status' => 'Activa',
                'status_color' => 'green',
            ]
        ];
    }
}