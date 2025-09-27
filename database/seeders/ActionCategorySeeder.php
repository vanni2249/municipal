<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['key' => 'application', 'en_name' => 'Application', 'es_name' => 'Solicitud'],
            ['key' => 'settlement', 'en_name' => 'Settlement', 'es_name' => 'Radicación'],
            ['key' => 'rent', 'en_name' => 'Rent', 'es_name' => 'Renta'],
            ['key' => 'register', 'en_name' => 'Register', 'es_name' => 'Registro'],
            ['key' => 'report', 'en_name' => 'Report', 'es_name' => 'Reporte']
        ];

        foreach ($items as $item) {
            \App\Models\ActionCategory::updateOrCreate(
                ['key' => $item['key']],
                ['en_name' => $item['en_name'], 'es_name' => $item['es_name']]
            );
        }
    }
}
