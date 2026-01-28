<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'created',
                'name' => ['en' => 'Created', 'es' => 'Creado'],
            ],
            [
                'slug' => 'edited',
                'name' => ['en' => 'Edited', 'es' => 'Editado'],
            ],
            [
                'slug' => 'viewed',
                'name' => ['en' => 'Viewed', 'es' => 'Visto'],
            ],
        ];

        foreach ($items as $item) {
            \App\Models\LogType::create($item);
        }
    }
}
