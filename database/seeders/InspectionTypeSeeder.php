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
        ];

        foreach ($items as $item) {
            \App\Models\InspectionType::create($item);
        }
    }
}
