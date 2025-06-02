<?php

namespace App\Data;

class Interaction {

    static function items()
    {
        return [
            [
                'date' => '4',
                'category' => 'Mensaje',
                'sub-category' => 'Solicitar facilidad deportiva',
                'sender' => 'Geovanni Colon Barrios',
                'sender_category' => 'Comerciante',
                'receiver' => 'Departamento de Recreación y Deportes',
                'status' => 'No respondido',
                'status_color' => 'red',
            ],
            [
                'date' => '5',
                'category' => 'Llamada',
                'sub-category' => 'Radicar permiso de construcción',
                'sender' => 'Maria Perez',
                'sender_category' => 'Comerciane',
                'receiver' => 'Departamento de Finanzas',
                'status' => 'No respondido',
                'status_color' => 'red',
            ],
            [
                'date' => '6',
                'category' => 'Mensaje',
                'sub-category' => 'Solicitar información de servicios públicos',
                'sender' => 'Carlos Lopez',
                'sender_category' => 'Ciudadano',
                'receiver' => 'Departamento de Servicios Públicos',
                'status' => 'Respondido',
                'status_color' => 'green',
            ],
            [
                'date' => '7',
                'category' => 'Llamada',
                'sub-category' => 'Queja sobre el servicio de recolección de basura',
                'sender' => 'Ana Torres',
                'sender_category' => 'Ciudadana',
                'receiver' => 'Departamento de Limpieza Urbana',
                'status' => 'En proceso',
                'status_color' => 'yellow',
            ],
            [
                'date' => '8',
                'category' => 'Mensaje',
                'sub-category' => 'Solicitud de información sobre eventos comunitarios',
                'sender' => 'Luis Martinez',
                'sender_category' => 'Ciudadano',
                'receiver' => 'Departamento de Cultura y Eventos',
                'status' => 'No respondido',
                'status_color' => 'red',
            ],
            [
                'date' => '9',
                'category' => 'Llamada',
                'sub-category' => 'Consulta sobre trámites de licencia comercial',
                'sender' => 'Sofia Ramirez',
                'sender_category' => 'Comerciante',
                'receiver' => 'Departamento de Comercio y Licencias',
                'status' => 'Respondido',
                'status_color' => 'green',
            ],
        ];
    }
}