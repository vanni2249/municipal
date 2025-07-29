<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['en_name' => 'veteran', 'es_name' => 'veterano'],
            ['en_name' => 'disabled', 'es_name' => 'discapacitado'],
            ['en_name' => 'senior', 'es_name' => 'senior'],
        ];

        foreach ($items as $item) {
            \App\Models\RegisterCategory::create($item);
        }
    }
}
