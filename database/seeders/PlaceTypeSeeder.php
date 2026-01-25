<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['slug' => 'residential', 'name' => ['en' => 'Residential', 'es' => 'Residencial']],
            ['slug' => 'commercial', 'name' => ['en' => 'Commercial', 'es' => 'Comercial']],
            ['slug' => 'industrial', 'name' => ['en' => 'Industrial', 'es' => 'Industrial']],
            ['slug' => 'recreational', 'name' => ['en' => 'Recreational', 'es' => 'Recreativo']],
        ];

        foreach ($items as $item) {
            \App\Models\PlaceType::create($item);
        }
    }
}
