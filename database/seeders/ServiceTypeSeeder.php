<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'application',
                'name' => [
                    'en' => 'Application',
                    'es' => 'Aplicación',
                ]
            ],
            [
                'slug' => 'settlement',
                'name' => [
                    'en' => 'Settlement',
                    'es' => 'Liquidación',
                ]
            ],
            [
                'slug' => 'rental',
                'name' => [
                    'en' => 'Rental',
                    'es' => 'Alquiler',
                ]
            ],
            [
                'slug' => 'usage',
                'name' => [
                    'en' => 'Usage',
                    'es' => 'Uso',
                ]
            ],
            [
                'slug' => 'report',
                'name' => [
                    'en' => 'Report',
                    'es' => 'Reporte',  
                ]
            ],
            [
                'slug' => 'registration',
                'name' => [
                    'en' => 'Registration',
                    'es' => 'Registro',
                ]
            ],
            
        ];

        foreach ($items as $item) {
            \App\Models\ServiceType::create($item);
        }
    }
}
