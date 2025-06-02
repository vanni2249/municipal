<?php

namespace App\Data;

class Rent
{
    static function items(): array
    {
        return [
            [
                'date' => '4',
                'category' => 'Renta de usos múltiples',
                'name' => 'Geovanni Colon Barrios',
                'who' => 'Ciudadano',
                'status' => 'Completado',
                'status_color' => 'green',
                'invoice' => 'Factura #1234',
                'invoice_amount' => '$500.00',
                'payment' => 'Pago #1234',
                'payment_amount' => '$500.00',
            ],
            [
                'date' => '5',
                'category' => 'Renta de usos múltiples',
                'name' => 'María Pérez López',
                'who' => 'Ciudadano',
                'status' => 'Pendiente',
                'status_color' => 'yellow',
                'invoice' => 'Factura #1235',
                'invoice_amount' => '$300.00',
                'payment' => '',
                'payment_amount' => '',
            ],
            [
                'date' => '6',
                'category' => 'Renta de usos múltiples',
                'name' => 'Carlos García Martínez',
                'who' => 'Ciudadano',
                'status' => 'Completado',
                'status_color' => 'green',
                'invoice' => 'Factura #1236',
                'invoice_amount' => '$450.00',
                'payment' => 'Pago #1236',
                'payment_amount' => '$450.00',
            ],  
            [
                'date' => '7',
                'category' => 'Renta de usos múltiples',
                'name' => 'Ana Torres Sánchez',
                'who' => 'Ciudadano',
                'status' => 'Cancelado',
                'status_color' => 'red',
                'invoice' => '',
                'invoice_amount' => '',
                'payment' => '',
                'payment_amount' => '',
            ],  
            [
                'date' => '8',
                'category' => 'Renta de usos múltiples',
                'name' => 'Luis Fernández Ramírez',
                'who' => 'Ciudadano',
                'status' => 'Completado',
                'status_color' => 'green',
                'invoice' => 'Factura #1237',
                'invoice_amount' => '$600.00',
                'payment' => 'Pago #1237',
                'payment_amount' => '$600.00',
            ],
 
        ];
    }
}