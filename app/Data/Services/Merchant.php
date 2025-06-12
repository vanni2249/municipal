<?php

namespace App\Data\Services;

class Merchant
{
    static function items()
    {
        return [
                       
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'registers',
                'title' => 'Registro de nuevo comercio',
                'sub-title' => 'Solicitud de registro de un nuevo comercio para el funcionamiento del mismo',
                'route' => 'merchants.dashboard',
                'img' => 'img/merchants/register-business-480.png',
            ],
            [
                'users' => ['merchants', 'accountants'],
                'category' => 'settlements',
                'title' => 'Radicar permiso de construcción',
                'sub-title' => 'Solicitud de permiso de construcción para el comienzo de la construcción de un nuevo comercio',
                'route' => 'merchants.settlements.building-permits.create',
                'img' => 'img/merchants/building-construction-480.png',
            ],
            // [
            //     'category' => 'settlements',
            //     'title' => 'Radicar permiso de uso',
            //     'sub-title' => 'Radicacion de permiso de uso para el funcionamiento del comercio',
            //     'route' => 'merchants.settlements.use-permits.create',
            //     'img' => 'img/merchants/business-permit-480.png',
            // ],
            // [
            //     'category' => 'settlements',
            //     'title' => 'Radicar patente temporera',
            //     'sub-title' => 'Radicar patente temporera para el funcionamiento del comercio',
            //     'route' => 'merchants.settlements.temp-patents.create',
            //     'img' => 'img/merchants/patent-temporal-480.png',
            // ],
            // [
            //     'category' => 'settlements',
            //     'title' => 'Radicar patente oficial',
            //     'sub-title' => 'Radicar patente oficial para el funcionamiento del comercio',
            //     'route' => 'merchants.settlements.official-patents.create',
            //     'img' => 'img/merchants/patent-municipal-480.png',
            // ],
            // [
            //     'category' => 'settlements',
            //     'title' => 'Radicar renovación de patente',
            //     'sub-title' => 'Radicar renovación de patente para el funcionamiento del comercio',
            //     'route' => 'merchants.settlements.renew-patents.create',
            //     'img' => 'img/merchants/patent-renew-480.png',
            // ],
            // [
            //     'category' => 'applications',
            //     'title' => 'Solicitud de recogido de escombros',
            //     'sub-title' => 'Solicitud de recogido de escombros para el comercio',
            //     'route' => 'merchants.applications.collect-debris.create',
            //     'img' => 'img/merchants/collection-debris-480.png',
            // ],
            // [
            //     'category' => 'interactions',
            //     'title' => 'Solicitar interaccion a traves de mensaje',
            //     'sub-title' => 'Solicitar interaccion a traves de mensaje para el comercio',
            //     'route' => 'merchants.interactions.messages.create',
            //     'img' => 'img/merchants/interaction-message-480.png',
            // ],
            // [
            //     'category' => 'interactions',
            //     'title' => 'Solicitar interaccion a traves de llamada',
            //     'sub-title' => 'Solicitar interaccion a traves de llamada para el comercio',
            //     'route' => 'merchants.interactions.calls.create',
            //     'img' => 'img/merchants/interaction-call-480.png',
            // ]
        ];
    }
}