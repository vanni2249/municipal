<?php

namespace App\Data;

class Application {

    static function items()
    {
        return [
            [
                'date' => '4',
                'category' => 'Solicitud recogido de escombros',
                'name' => 'Geovanni Colon Barrios',
                'who' => 'Ciudadano',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '9',
                'category' => 'Solicitud uso facilidades deportivas',
                'name' => 'Juan Perez Gomez',
                'who' => 'Ciudadano',
                'status' => 'Aprobado',
                'status_color' => 'green',
            ],
            [
                'date' => '21',
                'category' => 'Solicitud uso facilidades deportivas',
                'name' => 'Maria Lopez Sanchez',
                'who' => 'Ciudadano',
                'status' => 'Rechazado',
                'status_color' => 'red',
            ],
            [
                'date' => '23',
                'category' => 'Solicitud recogido de escombros',
                'name' => 'Carlos Ramirez Torres',
                'who' => 'Ciudadano',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ],
            [
                'date' => '30',
                'category' => 'Solicitud uso facilidades deportivas',
                'name' => 'Ana Maria Ruiz',
                'who' => 'Ciudadano',
                'status' => 'Aprobado',
                'status_color' => 'green',
            ],
            [
                'date' => '31',
                'category' => 'Solicitud recogido de escombros',
                'name' => 'Luis Fernando Diaz',
                'who' => 'Comerciante',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
            ]
        ];
    }
}