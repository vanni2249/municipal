<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = 
        [
            [
                'slug' => 'inspection',
                'name' => [
                    'en' => 'Inspection',
                    'es' => 'Inspección',
                ],
            ],
            [
                'slug' => 'business_remove_debris',
                'name' => [
                    'en' => 'Business Debris Removal',
                    'es' => 'Retiro de Escombros Comercial',
                ],
            ],
            [
                'slug' => 'residential_remove_debris',
                'name' => [
                    'en' => 'Residential Debris Removal',
                    'es' => 'Retiro de Escombros Residencial',
                ],
            ]
        ];

        foreach ($items as $item) {
            \App\Models\RouteType::create($item);
        }
    }
}
