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
                'slug' => 'remove_debris',
                'name' => [
                    'en' => 'Debris Removal',
                    'es' => 'Retiro de Escombros',
                ],
            ],
            [
                'slug' => 'garbage_collection',
                'name' => [
                    'en' => 'Garbage Collection',
                    'es' => 'Recolección de Basura',
                ],
            ]
        ];

        foreach ($items as $item) {
            \App\Models\RouteType::create($item);
        }
    }
}
