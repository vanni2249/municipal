<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['en_name' => 'citizen', 'es_name' => 'ciudadano'],
            ['en_name' => 'merchant', 'es_name' => 'comerciante'],
            ['en_name' => 'accountant', 'es_name' => 'contador'],
            ['en_name' => 'contractor', 'es_name' => 'contratista'],
            ['en_name' => 'supplier', 'es_name' => 'proveedor'],
            ['en_name' => 'visitor', 'es_name' => 'visitante'],
        ];

        foreach ($items as $item) {
            \App\Models\UserCategory::create($item);
        }
    }
}
