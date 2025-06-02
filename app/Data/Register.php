<?php

namespace App\Data;

class Register {

    static function items()
    {
        return [
            [
                'date' => '4',
                'category' => 'Registro de usuario',
                'name' => 'Geovanni Colon Barrios',
                'connection' => 'session',
                'connection_color' => 'blue',
                'status' => 'Activo',
                'status_color' => 'green',
            ],
            [
                'date' => '9',
                'category' => 'Registro de comerciante',
                'name' => 'Juan Perez Gomez',
                'connection' => 'session',
                'connection_color' => 'blue',
                'status' => 'Activo',
                'status_color' => 'green',
            ],
            [
                'date' => '21',
                'category' => 'Registro de persona edad avanzada',
                'name' => 'Maria Lopez Sanchez',
                'connection' => 'Data',
                'connection_color' => 'gray',
                'status' => 'Verificado',
                'status_color' => 'green',
            ],
            [
                'date' => '23',
                'category' => 'Registro de persona con discapacidad',
                'name' => 'Carlos Ramirez Torres',
                'connection' => 'Data',
                'connection_color' => 'gray',
                'status' => 'Activo',
                'status_color' => 'green',
            ],
            [
                'date' => '30',
                'category' => 'Registro de contable',
                'name' => 'Ana Maria Ruiz',
                'connection' => 'Session',
                'connection_color' => 'blue',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '31',
                'category' => 'Registro de contratista',
                'name' => 'Luis Fernando Diaz',
                'connection' => 'Session',
                'connection_color' => 'blue',       
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '2',
                'category' => 'Registro de supplidor',
                'name' => 'Elena Martinez Gomez',
                'connection' => 'Session',
                'connection_color' => 'blue',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '2',
                'category' => 'Registro de supplidor',
                'name' => 'Elena Martinez Gomez',
                'connection' => 'Session',
                'connection_color' => 'blue',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ]
        ];
    }
}