<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                //1
                'service_category_id' => 1,
                'es_name' => 'Solicitar recogido de basura a negocio',
                'en_name' => 'Request garbage collection for business',
                'es_description' => 'Solicita la recogida de basura en tu negocio.',
                'en_description' => 'Request garbage collection at your business.',
                'slug' => 'request-garbage-collection',
                'price' => 25.00,
                'is_active' => true,
            ],
            [
                //2
                'service_category_id' => 1,
                'es_name' => 'Solicitar recogido de escombros a domicilio',
                'en_name' => 'Request debris collection at home',
                'es_description' => 'Solicita la recogida de escombros en tu hogar.',
                'en_description' => 'Request debris collection at your home.',
                'slug' => 'request-debris-collection',
                'price' => 0.00,
                'is_active' => true,
            ],
            [
                //3
                'service_category_id' => 1,
                'es_name' => 'Solicitar recogido de escombros a negocio',
                'en_name' => 'Request debris collection at business',
                'es_description' => 'Solicita la recogida de escombros en tu negocio.',
                'en_description' => 'Request debris collection at your business.',
                'slug' => 'request-debris-collection-business',
                'price' => 45.00,
                'is_active' => true,
            ],
            [
                //4
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
                //5
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

        foreach ($items as $item) {
            \App\Models\Service::create($item);
        }

        $citizen = \App\Models\Type::where('key', 'citizen')->first();

        $citizen->services()->attach([2]);

        $merchant = \App\Models\Type::where('key', 'merchant')->first();

        $merchant->services()->attach([1, 3, 4, 5]);

        $accountant = \App\Models\Type::where('key', 'accountant')->first();

        $accountant->services()->attach([1, 3, 4, 5]);

        
    }
}
