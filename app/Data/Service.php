<?php

namespace App\Data;

class Service
{
    public static function items(): array
    {
        return [
            [
                'users' => ['accountants'],
                'category' => 'registers',
                'title' => 'Registro de nuevo comerciante',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
                'route' => request()->segment(1) .'.merchants.create',
                'img' => 'img/services/register-business-480.png',
            ],
            [
                'users' => ['merchants'],
                'category' => 'registers',
                'title' => 'Registro de nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
                'route' => 'merchants.businesses.create',
                'img' => 'img/services/register-business-480.png',
            ],
            [
                'users' => ['citizens', 'merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el comienzo de la construcción de un nuevo comercio',
                'route' => (request()->segment(1) == 'merchants') ? 'merchants.businesses.index' : 'accountants.merchants.index',
                'img' => 'img/services/building-construction-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de uso',
                'sub-title' => 'Radicacion de permiso de uso para el funcionamiento del comercio',
                'route' => (request()->segment(1) == 'merchants') ? 'merchants.businesses.index' : 'accountants.merchants.index',
                'img' => 'img/services/business-permit-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar patente temporera',
                'sub-title' => 'Radicar patente temporera para el funcionamiento del comercio',
                'route' => (request()->segment(1) == 'merchants') ? 'merchants.businesses.index' : 'accountants.merchants.index',
                'img' => 'img/services/patent-temporal-480.png',
                
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar patente oficial',
                'sub-title' => 'Radicar patente oficial para el funcionamiento del comercio',
                'route' => (request()->segment(1) == 'merchants') ? 'merchants.businesses.index' : 'accountants.merchants.index',
                'img' => 'img/services/patent-municipal-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar renovación de patente',
                'sub-title' => 'Radicar renovación de patente para el funcionamiento del comercio',
                'route' => (request()->segment(1) == 'merchants') ? 'merchants.businesses.index' : 'accountants.merchants.index',
                'img' => 'img/services/patent-renew-480.png',
            ],
            [
                'users' => ['citizens', 'merchants'],
                'category' => 'applications',
                'title' => 'Solicitud de recogido de escombros',
                'sub-title' => 'Solicitud de recogido de escombros para el comercio',
                'route' => (request()->segment(1) === 'citizens') ? 'citizens.applications.collect-debris.create' : 'merchants.businesses.index',
                'img' => 'img/services/collection-debris-480.png',
            ],
            [
                'users' => ['citizens','merchants', 'accountants'],
                'category' => 'interactions',
                'title' => 'Solicitar interaccion a traves de llamada',
                'sub-title' => 'Solicitar interaccion a traves de llamada para el comercio',
                'route' => request()->segment(1) .'.interactions.calls.create',
                'img' => 'img/services/interaction-call-480.png',
            ],
            [
                'users' => ['citizens','merchants', 'accountants'],
                'category' => 'interactions',
                'title' => 'Solicitar interaccion a traves de mensaje',
                'sub-title' => 'Solicitar interaccion a traves de mensaje para el comercio',
                'route' => request()->segment(1) .'.interactions.messages.create',
                'img' => 'img/services/interaction-message-480.png',
            ],
            [
                'users' => ['citizens'],
                'category' => 'applications',
                'title' => 'Solicitar uso de facilidades deportivas',
                'sub-title' => 'Solicitud de uso de facilidades deportivas para eventos deportivos',
                'route' => request()->segment(1) .'.dashboard',
                'img' => 'img/services/sport-facility-480.png',

            ],
            [
                'users' => ['citizens'],
                'category' => 'rents',
                'title' => 'Rentar facilidades activida privada',
                'sub-title' => 'Solicitud de renta de facilidades para actividades privadas',
                'route' => request()->segment(1) .'.rents.facilities.create',
                'img' => 'img/services/privaty-activity-480.png',

            ],
            [
                'users' => ['citizens'],
                'category' => 'registers',
                'title' => 'Registrar persona de edad avanzada',
                'sub-title' => 'Registro de persona de edad avanzada para servicios de la comunidad',
                'route' => request()->segment(1) .'.registers.senior-citizens.create',
                'img' => 'img/services/elderly-person-480.png',
                
            ],
            [
                'users' => ['citizens'],
                'category' => 'registers',
                'title' => 'Registrar persona con impedimento',
                'sub-title' => 'Registro de persona con impedimento para servicios de la comunidad',
                'route' => request()->segment(1) .'.registers.people-disabilities.create',            
                'img' => 'img/services/disability-person-480.png',
            ]
        ];
    }
}