<?php

namespace App\Data\Services;

class User
{
    static function items()
    {
        return [
            [
                'title' => 'Solicitar recogido de escombros',
                'sub-title' => 'Solicitud de recigido de escombros en residencias privadas y públicas',
            ],
            [
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para recidencias privadas',

            ],
            [
                'title' => 'Solicitar uso de facilidades deportivas',
                'sub-title' => 'Solicitud de uso de facilidades deportivas para eventos deportivos',
            ],
            [
                'title' => 'Rentar facilidades activida privada',
                'sub-title' => 'Solicitud de renta de facilidades para actividades privadas',
            ],
            [
                'title' => 'Registrar persona de edad avanzada',
                'sub-title' => 'Registro de persona de edad avanzada para servicios de la comunidad',
            ],
            [
                'title' => 'Registrar persona con impedimento',
                'sub-title' => 'Registro de persona con impedimento para servicios de la comunidad',
            ]
        ];
    }
}
