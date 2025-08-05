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
            ['key' => 'application', 'en_name' => 'Application', 'es_name' => 'Solicitud'],
            ['key' => 'settlement', 'en_name' => 'Settlement', 'es_name' => 'Radicación'],
            ['key' => 'rents', 'en_name' => 'Rents', 'es_name' => 'Alquileres'],
            ['key' => 'register', 'en_name' => 'Register', 'es_name' => 'Registro'],
            ['key' => 'report', 'en_name' => 'Report', 'es_name' => 'Reporte'],
        ];

        foreach ($items as $item) {
            \App\Models\ServiceCategory::create($item);
        }
    }
}
