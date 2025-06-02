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
                'route' => 'users.services.show',
                'slug' => 'register-multiple-merchants',
            ],
            [
                'title' => 'Registrar un nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio en la plataforma',
                'route' => 'users.services.show',
                'slug' => 'register-new-merchan',
            ],
            [
                'title' => 'Solicitar patenta de comercio',
                'sub-title' => 'Solicitud de patenta de comercio para el funcionamiento del mismo',
                'route' => 'users.services.show',
                'slug' => 'request-merchan-patent',
            ],
            [
                'title' => 'Renovar patenta de comercio',
                'sub-title' => 'Solicitud de renovación de patenta de comercio para el funcionamiento del mismo',
                'route' => 'users.services.show',
                'slug' => 'renew-merchan-patent',
            ],
            [
                'title' => 'Solicitar permiso de uso',
                'sub-title' => 'Solicitud de permiso de uso para el funcionamiento del comercio',
                'route' => 'users.services.show',
                'slug' => 'request-use-permit',
            ],
            [
                'title' => 'Solicitar inspección de comercio',
                'sub-title' => 'Solicitud de inspección de comercio para el funcionamiento del mismo',
                'route' => 'users.services.show',
                'slug' => 'request-merchan-inspection',
            ],
            [
                'title' => 'Solicitar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el funcionamiento del comercio',
                'route' => 'users.services.show',
                'slug' => 'request-construction-permit',
            ]
        ];
    }
}