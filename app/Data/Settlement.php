<?php

namespace App\Data;

class Settlement
{
    static function items(): array
    {
        return [
            [
                'date' => '4',
                'category' => 'Radicación de permiso de construcción',
                'name' => 'Geovanni Colon Barrios',
                'who' => 'Ciudadano',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '9',
                'category' => 'Radicación de permiso de uso',
                'name' => 'Juan Perez Gomez',
                'who' => 'Ciudadano',
                'status' => 'Aprobado',
                'status_color' => 'green',
            ],
            [
                'date' => '21',
                'category' => 'Radicación de patente temporera',
                'name' => 'Maria Lopez Sanchez',
                'who' => 'Comerciante',
                'status' => 'Rechazado',
                'status_color' => 'red',
            ],
            [
                'date' => '23',
                'category' => 'Radicación de patente oficial',
                'name' => 'Carlos Ramirez Torres',
                'who' => 'Comerciante',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '30',
                'category' => 'Radicación de renovación de patente',
                'name' => 'Ana Maria Ruiz',
                'who' => 'Comerciante',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
        ];
    }
}