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
                'slug' => 'business-remove-trash-inspection',
                'name' => [
                    'en' => 'Business Remove Trash Inspection',
                    'es' => 'Inspección de Retiro de Basura Comercial',
                ],
            ],
            [
                'slug' => 'business-remove-debris-inspection',
                'name' => [
                    'en' => 'Business Remove Debris Inspection',
                    'es' => 'Inspección de Retiro de Escombros Comerciales',
                ],
            ],
            [
                'slug' => 'business-construction-permit-inspection',
                'name' => [
                    'en' => 'Business Construction Permit Inspection',
                    'es' => 'Inspección de Permiso de Construcción Comercial',
                ],
            ],
            [
                'slug' => 'business-use-permit-inspection',
                'name' => [
                    'en' => 'Business Use Permit Inspection',
                    'es' => 'Inspección de Permiso de Uso Comercial',
                ],
            ],
            [
                'slug' => 'residential-remove-debris-inspection',
                'name' => [
                    'en' => 'Residential Remove Debris Inspection',
                    'es' => 'Inspección de Retiro de Escombros Residenciales',
                ],
            ],
            [
                'slug' => 'residential-construction-permit-inspection',
                'name' => [
                    'en' => 'Residential Construction Permit Inspection',
                    'es' => 'Inspección de Permiso de Construcción Residencial',
                ],
            ],
        ];

        foreach ($items as $item) {
            \App\Models\InspectionType::create($item);
        }
    }
}
