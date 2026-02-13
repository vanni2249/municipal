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
                    'en' => 'Business Remove Trash',
                    'es' => 'Retiro de Basura Comercial',
                ],
            ],
            [
                'slug' => 'business-remove-debris-inspection',
                'name' => [
                    'en' => 'Business Remove Debris',
                    'es' => 'Retiro de Escombros Comerciales',
                ],
            ],
            [
                'slug' => 'business-construction-permit-inspection',
                'name' => [
                    'en' => 'Business Construction Permit',
                    'es' => 'Permiso de Construcción Comercial',
                ],
            ],
            [
                'slug' => 'business-use-permit-inspection',
                'name' => [
                    'en' => 'Business Use Permit',
                    'es' => 'Permiso de Uso Comercial',
                ],
            ],
            [
                'slug' => 'residential-remove-debris-inspection',
                'name' => [
                    'en' => 'Residential Remove Debris',
                    'es' => 'Retiro de Escombros Residenciales',
                ],
            ],
            [
                'slug' => 'residential-construction-permit-inspection',
                'name' => [
                    'en' => 'Residential Construction Permit',
                    'es' => 'Permiso de Construcción Residencial',
                ],
            ],
        ];

        foreach ($items as $item) {
            \App\Models\InspectionType::create($item);
        }
    }
}
