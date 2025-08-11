<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['key' => 'restaurant', 'en_name' => 'Restaurant', 'es_name' => 'Restaurante'],
            ['key' => 'cafe', 'en_name' => 'Coffee', 'es_name' => 'Cafetería'],
            ['key' => 'bar', 'en_name' => 'Bar', 'es_name' => 'Bar'],
            ['key' => 'shop', 'en_name' => 'Shop', 'es_name' => 'Tienda'],
            ['key' => 'service', 'en_name' => 'Service', 'es_name' => 'Servicio'],
        ];

        \App\Models\BusinessCategory::insert($items);
    }
}
