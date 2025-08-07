<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['key' => 'applications', 'en_name' => 'Applications', 'es_name' => 'Solicitudes'],
            ['key' => 'settlements', 'en_name' => 'Settlements', 'es_name' => 'Radicaciones'],
            ['key' => 'rents', 'en_name' => 'Rents', 'es_name' => 'Alquileres'],
            ['key' => 'registers', 'en_name' => 'Register', 'es_name' => 'Registros'],
            ['key' => 'reports', 'en_name' => 'Report', 'es_name' => 'Reportes'],
        ];

        foreach ($items as $item) {
            \App\Models\ServiceCategory::create($item);
        }
    }
}
