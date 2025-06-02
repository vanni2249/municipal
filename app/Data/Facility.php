<?php

namespace App\Data;

class Facility {

    static function items()
    {
        return [
            [
                'category' => 'Facilidad Deportiva',
                'slug' => 'estadio-municipal',
                'name' => 'Estadio Municipal',
                'address' => 'Direccion 1',
                'location' => 'Ciudad 1',
                'opening_hours' => 'Lunes a Viernes: 8:00 - 20:00',
                'phone' => '123456789',
                'status' => 'Activa',
                'status_color' => 'green',
            ]
        ];
    }
}