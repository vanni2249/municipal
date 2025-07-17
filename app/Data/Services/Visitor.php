<?php

namespace App\Data\Services;

class Visitor
{
    static function items()
    {
        return [
                       
            [
                'title' => 'Compra de boletos',
                'sub-title' => 'Solicitud de compra de boletos para eventos',
            ],
            [
                'title' => 'Pago de estacionamiento',
                'sub-title' => 'Solicitud de pago de estacionamiento para eventos',
            ],
        ];
    }
}