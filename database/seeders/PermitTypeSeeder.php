<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'business-permit-construction',
                'name' => [
                    'en' => 'Business Permit Construction',
                    'es' => 'Permiso de Construcción de Negocio',
                ],
            ],
            [
                'slug' => 'business-permit-use',
                'name' => [
                    'en' => 'Business Permit Use',
                    'es' => 'Permiso de Uso de Negocio',
                ],
            ],
            [
                'slug' => 'residential-permit-construction',
                'name' => [
                    'en' => 'Residential Permit Construction',
                    'es' => 'Permiso de Construcción Residencial',
                ],
            ]
        ];

        foreach ($items as $item) {
            \App\Models\PermitType::create($item);
        }
    }
}
