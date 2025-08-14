<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['key' => 'retail', 'en_name' => 'Retail', 'es_name' => 'Venta al por menor'],
            ['key' => 'wholesale', 'en_name' => 'Wholesale', 'es_name' => 'Venta al por mayor'],
            ['key' => 'service', 'en_name' => 'Service', 'es_name' => 'Servicio'],
            ['key' => 'manufacturing', 'en_name' => 'Manufacturing', 'es_name' => 'Manufactura'],
            ['key' => 'agriculture', 'en_name' => 'Agriculture', 'es_name' => 'Agricultura'],
            ['key' => 'construction', 'en_name' => 'Construction', 'es_name' => 'Construcción'],
            ['key' => 'transportation', 'en_name' => 'Transportation', 'es_name' => 'Transporte'],
            ['key' => 'healthcare', 'en_name' => 'Healthcare', 'es_name' => 'Salud'],
            ['key' => 'education', 'en_name' => 'Education', 'es_name' => 'Educación'],
            ['key' => 'hospitality', 'en_name' => 'Hospitality', 'es_name' => 'Hospitalidad'],
            ['key' => 'finance', 'en_name' => 'Finance', 'es_name' => 'Finanzas'],
            ['key' => 'real_estate', 'en_name' => 'Real Estate', 'es_name' => 'Bienes raíces'],
            ['key' => 'technology', 'en_name' => 'Technology', 'es_name' => 'Tecnología'],
            ['key' => 'entertainment', 'en_name' => 'Entertainment', 'es_name' => 'Entretenimiento'],
            ['key' => 'non_profit', 'en_name' => 'Non-Profit', 'es_name' => 'Sin fines de lucro'],
        ];

        foreach ($items as $item) {
            \App\Models\BusinessType::updateOrCreate(
                ['key' => $item['key']],
                ['en_name' => $item['en_name'], 'es_name' => $item['es_name']]
            );
        }
    }
}
