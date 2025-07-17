<?php

namespace App\Data\Services;

class Accountant
{
    static function items()
    {
        return [
            [
                'title' => 'Registrar multiples comericiantes',
                'sub-title' => 'Registro de multiples comericiantes para servicios de la comunidad',
            ],
            [
                'title' => 'Registrar un nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio en la plataforma',
            ],
            [
                'title' => 'Solicitar patenta de comercio',
                'sub-title' => 'Solicitud de patenta de comercio para el funcionamiento del mismo',
            ],
            [
                'title' => 'Renovar patenta de comercio',
                'sub-title' => 'Solicitud de renovación de patenta de comercio para el funcionamiento del mismo',
            ],
            [
                'title' => 'Solicitar permiso de uso',
                'sub-title' => 'Solicitud de permiso de uso para el funcionamiento del comercio',
            ],
            [
                'title' => 'Solicitar inspección de comercio',
                'sub-title' => 'Solicitud de inspección de comercio para el funcionamiento del mismo',
            ],
            [
                'title' => 'Solicitar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el funcionamiento del comercio',
            ]
        ];
    }
}