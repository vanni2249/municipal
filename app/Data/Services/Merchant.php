<?php

namespace App\Data\Services;

class Merchant
{
    static function items()
    {
        return [
                       
            [
                'title' => 'Registro de nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
            ],
            [
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el comienzo de la construcción de un nuevo comercio',
            ],
            [
                'title' => 'Radicar permiso de uso',
                'sub-title' => 'Radicacion de permiso de uso para el funcionamiento del comercio',
            ],
            [
                'title' => 'Radicar patente temporera',
                'sub-title' => 'Radicar patente temporera para el funcionamiento del comercio',
            ],
            [
                'title' => 'Radicar patente oficial',
                'sub-title' => 'Radicar patente oficial para el funcionamiento del comercio',
            ],
            [
                'title' => 'Radicar renovación de patente',
                'sub-title' => 'Radicar renovación de patente para el funcionamiento del comercio',
            ],
            [
                'title' => 'Solicitud de recogido de escombros',
                'sub-title' => 'Solicitud de recogido de escombros para el comercio',
            ],
            [
                'title' => 'Solicitar interaccion a traves de mensaje',
                'sub-title' => 'Solicitar interaccion a traves de mensaje para el comercio',
            ],
            [
                'title' => 'Solicitar interaccion a traves de llamada',
                'sub-title' => 'Solicitar interaccion a traves de llamada para el comercio',
            ]
        ];
    }
}