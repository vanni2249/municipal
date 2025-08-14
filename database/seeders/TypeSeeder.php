<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['key' => 'citizen', 'en_name' => 'Citizen', 'es_name' => 'Ciudadano'],
            ['key' => 'merchant', 'en_name' => 'Merchant', 'es_name' => 'Comerciante'],
            ['key' => 'citizen-merchant', 'en_name' => 'Citizen & Merchant', 'es_name' => 'Ciudadano & Comerciante'],
            ['key' => 'accountant', 'en_name' => 'Accountant', 'es_name' => 'Contador'],
            ['key' => 'contractor', 'en_name' => 'Contractor', 'es_name' => 'Contratista'],
            ['key' => 'supplier', 'en_name' => 'Supplier', 'es_name' => 'Proveedor'],
            ['key' => 'visitor', 'en_name' => 'Visitor', 'es_name' => 'Visitante'],
        ];

        foreach ($items as $item) {
            \App\Models\Type::create($item);
        }
    }
}
