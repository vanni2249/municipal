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
            ['key' => 'settlement', 'en_name' => 'Settlement', 'es_name' => 'Radicación'],
            ['key' => 'application', 'en_name' => 'Application', 'es_name' => 'Solicitud'],
        ];
    }
}
