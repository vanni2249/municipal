<?php

namespace App\Data;

class Service
{
    public static function items(): array
    {
        return [
            [
                'users' => ['accountant'],
                'category' => 'registers',
                'title' => 'Registro de nuevo comerciante',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
                'route' => 'users.merchants.create',
                'img' => 'img/services/register-business-480.png',
            ],
            [
                'users' => ['merchant'],
                'category' => 'registers',
                'title' => 'Registro de nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
                'route' => 'users.businesses.create',
                'img' => 'img/services/register-business-480.png',
            ],
            [
                'users' => ['citizen', 'merchant', 'accountant'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el comienzo de la construcción de un nuevo comercio',
                'route' => 'users.merchants.index',
                'img' => 'img/services/building-construction-480.png',
            ],
            [
                'users' => ['merchant', 'accountant'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de uso',
                'sub-title' => 'Radicacion de permiso de uso para el funcionamiento del comercio',
                'route' => 'users.merchants.index',
                'img' => 'img/services/business-permit-480.png',
            ],
            [
                'users' => ['merchant', 'accountant'],
                'category' => 'settlements',
                'title' => 'Radicar patente temporera',
                'sub-title' => 'Radicar patente temporera para el funcionamiento del comercio',
                'route' => 'users.merchants.index',
                'img' => 'img/services/patent-temporal-480.png',
                
            ],
            [
                'users' => ['merchant', 'accountant'],
                'category' => 'settlements',
                'title' => 'Radicar patente oficial',
                'sub-title' => 'Radicar patente oficial para el funcionamiento del comercio',
                'route' => 'users.merchants.index',
                'img' => 'img/services/patent-municipal-480.png',
            ],
            [
                'users' => ['merchant', 'accountant'],
                'category' => 'settlements',
                'title' => 'Radicar renovación de patente',
                'sub-title' => 'Radicar renovación de patente para el funcionamiento del comercio',
                'route' => 'users.merchants.index',
                'img' => 'img/services/patent-renew-480.png',
            ],
            [
                'users' => ['citizen', 'merchant'],
                'category' => 'applications',
                'title' => 'Solicitud de recogido de escombros',
                'sub-title' => 'Solicitud de recogido de escombros para el comercio',
                'route' => 'users.businesses.index',
                'img' => 'img/services/collection-debris-480.png',
            ],
            [
                'users' => ['citizen','merchant', 'accountant'],
                'category' => 'interactions',
                'title' => 'Solicitar interaccion a traves de llamada',
                'sub-title' => 'Solicitar interaccion a traves de llamada para el comercio',
                'route' => 'users.interactions.calls.create',
                'img' => 'img/services/interaction-call-480.png',
            ],
            [
                'users' => ['citizen','merchant', 'accountant'],
                'category' => 'interactions',
                'title' => 'Solicitar interaccion a traves de mensaje',
                'sub-title' => 'Solicitar interaccion a traves de mensaje para el comercio',
                'route' => 'users.interactions.messages.create',
                'img' => 'img/services/interaction-message-480.png',
            ],
            [
                'users' => ['citizen'],
                'category' => 'applications',
                'title' => 'Solicitar uso de facilidades deportivas',
                'sub-title' => 'Solicitud de uso de facilidades deportivas para eventos deportivos',
                'route' => 'users.dashboard',
                'img' => 'img/services/sport-facility-480.png',

            ],
            [
                'users' => ['citizen'],
                'category' => 'rents',
                'title' => 'Rentar facilidades activida privada',
                'sub-title' => 'Solicitud de renta de facilidades para actividades privadas',
                'route' => 'users.rents.facilities.create',
                'img' => 'img/services/privaty-activity-480.png',

            ],
            [
                'users' => ['citizen'],    
                'category' => 'registers',
                'title' => 'Registrar persona de edad avanzada',
                'sub-title' => 'Registro de persona de edad avanzada para servicios de la comunidad',
                'route' => 'users.registers.senior-citizens.create',
                'img' => 'img/services/elderly-person-480.png',
                
            ],
            [
                'users' => ['citizen'],
                'category' => 'registers',
                'title' => 'Registrar persona con impedimento',
                'sub-title' => 'Registro de persona con impedimento para servicios de la comunidad',
                'route' => 'users.registers.people-disabilities.create',            
                'img' => 'img/services/disability-person-480.png',
            ]
        ];
    }
}