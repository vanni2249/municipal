<?php

namespace Database\Seeders;

use App\Models\DebrisType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DebrisTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['key' => 'wood', 'en_name' => 'Wood', 'es_name' => 'Madera'],
            ['key' => 'metal', 'en_name' => 'Metal', 'es_name' => 'Metal'],
            ['key' => 'plastic', 'en_name' => 'Plastic', 'es_name' => 'Plástico'],
            ['key' => 'glass', 'en_name' => 'Glass', 'es_name' => 'Vidrio'],
            ['key' => 'paper', 'en_name' => 'Paper', 'es_name' => 'Papel'],
            ['key' => 'organic', 'en_name' => 'Organic Waste', 'es_name' => 'Residuos Orgánicos'],
            ['key' => 'electronics', 'en_name' => 'Electronics', 'es_name' => 'Electrónicos'],
            ['key' => 'construction', 'en_name' => 'Construction Debris', 'es_name' => 'Escombros de Construcción'],
            ['key' => 'textiles', 'en_name' => 'Textiles', 'es_name' => 'Textiles'],
            ['key' => 'hazardous', 'en_name' => 'Hazardous Waste', 'es_name' => 'Residuos Peligrosos'],
        ];

        foreach ($items as $item) {
            DebrisType::create($item);
        }
    }
}
