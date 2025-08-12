<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Urbanizacion 1'],
            ['name' => 'Urbanizacion 2'],
            ['name' => 'Barrio 1'],
            ['name' => 'Barrio 2'],
            ['name' => 'Sector 1'],
            ['name' => 'Sector 2'],
            ['name' => 'Zona 1'],
            ['name' => 'Zona 2'],
        ];

        foreach ($items as $item) {
            \App\Models\Place::create($item);
        }
    }
}
