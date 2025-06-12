<?php

namespace App\Data;

class Service
{
    public static function items(): array
    {
        return [
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'registers',
                'title' => 'Registro de nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
                'route' => 'merchants.dashboard',
                'img' => 'img/services/register-business-480.png',
            ],
            [
                'users' => ['citizens', 'merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el comienzo de la construcción de un nuevo comercio',
                'route' => 'merchants.settlements.building-permits.create',
                'img' => 'img/services/building-construction-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de uso',
                'sub-title' => 'Radicacion de permiso de uso para el funcionamiento del comercio',
                'route' => 'merchants.settlements.use-permits.create',
                'img' => 'img/services/business-permit-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar patente temporera',
                'sub-title' => 'Radicar patente temporera para el funcionamiento del comercio',
                'route' => 'merchants.settlements.temp-patents.create',
                'img' => 'img/services/patent-temporal-480.png',
                
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar patente oficial',
                'sub-title' => 'Radicar patente oficial para el funcionamiento del comercio',
                'route' => 'merchants.settlements.official-patents.create',
                'img' => 'img/services/patent-municipal-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar renovación de patente',
                'sub-title' => 'Radicar renovación de patente para el funcionamiento del comercio',
                'route' => 'merchants.settlements.renew-patents.create',
                'img' => 'img/services/patent-renew-480.png',
            ],
            [
                'users' => ['citizens', 'merchants', 'accountants'],
                'category' => 'applications',
                'title' => 'Solicitud de recogido de escombros',
                'sub-title' => 'Solicitud de recogido de escombros para el comercio',
                'route' => 'merchants.applications.collect-debris.create',
                'img' => 'img/services/collection-debris-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'interactions',
                'title' => 'Solicitar interaccion a traves de mensaje',
                'sub-title' => 'Solicitar interaccion a traves de mensaje para el comercio',
                'route' => 'merchants.interactions.messages.create',
                'img' => 'img/services/interaction-message-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'interactions',
                'title' => 'Solicitar interaccion a traves de llamada',
                'sub-title' => 'Solicitar interaccion a traves de llamada para el comercio',
                'route' => 'merchants.interactions.calls.create',
                'img' => 'img/services/interaction-call-480.png',
            ],
            [
                'users' => ['citizens'],
                'category' => 'applications',
                'title' => 'Solicitar uso de facilidades deportivas',
                'sub-title' => 'Solicitud de uso de facilidades deportivas para eventos deportivos',
                'route' => 'citizens.applications.sport-facilities.create',
                'img' => 'img/services/sport-facility-480.png',

            ],
            [
                'users' => ['citizens'],
                'category' => 'rents',
                'title' => 'Rentar facilidades activida privada',
                'sub-title' => 'Solicitud de renta de facilidades para actividades privadas',
                'route' => 'citizens.rents.activity-facilities.create',
                'img' => 'img/services/privaty-activity-480.png',

            ],
            [
                'users' => ['citizens'],
                'category' => 'registers',
                'title' => 'Registrar persona de edad avanzada',
                'sub-title' => 'Registro de persona de edad avanzada para servicios de la comunidad',
                'route' => 'citizens.registers.senior-citizens.create',
                'img' => 'img/services/elderly-person-480.png',
                
            ],
            [
                'users' => ['citizens'],
                'category' => 'registers',
                'title' => 'Registrar persona con impedimento',
                'sub-title' => 'Registro de persona con impedimento para servicios de la comunidad',
                'route' => 'citizens.registers.people-disabilities.create',            
                'img' => 'img/services/disability-person-480.png',
            ]
        ];
    }
}