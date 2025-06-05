<?php

namespace App\Data\Services;

class User
{
    static function items()
    {
        return [
            [
                'category' => 'applications',
                'title' => 'Solicitar recogido de escombros',
                'sub-title' => 'Solicitud de recigido de escombros en residencias privadas y públicas',
                'route' => 'citizens.applications.collect-debris.create',
                'img' => 'img/users/collection-debris-480.png',
            ],
            [
                'category' => 'settlements',
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para recidencias privadas',
                'route' => 'citizens.settlements.building-permits.create',
                'img' => 'img/users/bulding-permit-480.png',

            ],
            [
                'category' => 'applications',
                'title' => 'Solicitar uso de facilidades deportivas',
                'sub-title' => 'Solicitud de uso de facilidades deportivas para eventos deportivos',
                'route' => 'citizens.applications.sport-facilities.create',
                'img' => 'img/users/sport-facility-480.png',

            ],
            [
                'category' => 'rents',
                'title' => 'Rentar facilidades activida privada',
                'sub-title' => 'Solicitud de renta de facilidades para actividades privadas',
                'route' => 'citizens.rents.activity-facilities.create',
                'img' => 'img/users/privaty-activity-480.png',

            ],
            [
                'category' => 'registers',
                'title' => 'Registrar persona de edad avanzada',
                'sub-title' => 'Registro de persona de edad avanzada para servicios de la comunidad',
                'route' => 'citizens.registers.senior-citizens.create',
                'img' => 'img/users/elderly-person-480.png',
                
            ],
            [
                'category' => 'registers',
                'title' => 'Registrar persona con impedimento',
                'sub-title' => 'Registro de persona con impedimento para servicios de la comunidad',
                'route' => 'citizens.registers.people-disabilities.create',            
                'img' => 'img/users/disability-person-480.png',
            ]
        ];
    }
}
