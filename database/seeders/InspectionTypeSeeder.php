<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InspectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'building-inspection',
                'name' => [
                    'en' => 'Building Inspection',
                    'es' => 'Inspección de Edificios',
                ],
            ],
            [
                'slug' => 'health-inspection',
                'name' => [
                    'en' => 'Health Inspection',
                    'es' => 'Inspección de Salud',
                ],
            ],
            [
                'slug' => 'safety-inspection',
                'name' => [
                    'en' => 'Safety Inspection',
                    'es' => 'Inspección de Seguridad',
                ],
            ],
            [
                'slug' => 'trash-inspection',
                'name' => [
                    'en' => 'Trash Inspection',
                    'es' => 'Inspección de Basura',
                ],
            ],
            [
                'slug' => 'debris-inspection',
                'name' => [
                    'en' => 'Debris Inspection',
                    'es' => 'Inspección de Escombros',
                ],
            ],
            [
                'slug' => 'environmental-inspection',
                'name' => [
                    'en' => 'Environmental Inspection',
                    'es' => 'Inspección Ambiental',
                ],
            ],
            [
                'slug' => 'construction-inspection',
                'name' => [
                    'en' => 'Construction Inspection',
                    'es' => 'Inspección de Construcción',
                ],
            ]
        ];

        foreach ($items as $item) {
            \App\Models\InspectionType::create($item);
        }
    }
}
