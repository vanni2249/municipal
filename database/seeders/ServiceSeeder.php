<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'service_category_id' => 1,
                'es_name' => 'Solicitar recogido de basura',
                'en_name' => 'Request garbage collection',
                'es_description' => 'Solicita la recogida de basura en tu hogar.',
                'en_description' => 'Request garbage collection at your home.',
                'slug' => 'request-garbage-collection',
                'price' => 0.00,
                'is_active' => true,
            ],
            [
                'service_category_id' => 1,
                'es_name' => 'Solicitar recogido de escombros',
                'en_name' => 'Request debris collection',
                'es_description' => 'Solicita la recogida de escombros en tu hogar.',
                'en_description' => 'Request debris collection at your home.',
                'slug' => 'request-debris-collection',
                'price' => 0.00,
                'is_active' => true,
            ],
            [
                'service_category_id' => 2,
                'es_name' => 'Radicar permiso de construcción',
                'en_name' => 'File construction permit',
                'es_description' => 'Radica un permiso para realizar obras de construcción en tu propiedad.',
                'en_description' => 'File a permit to carry out construction works on your property.',
                'slug' => 'file-construction-permit',
                'price' => 25.00,
                'is_active' => true,
            ],
            [
                'service_category_id' => 2,
                'es_name' => 'Radicar permiso de uso',
                'en_name' => 'File usage permit',
                'es_description' => 'Radica un permiso para el uso de tu propiedad.',
                'en_description' => 'File a permit for the use of your property.',
                'slug' => 'file-usage-permit',
                'price' => 25.00,
                'is_active' => true,
            ],

        ];
    }
}
