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
            [
                'slug' => 'retail', 
                'name' => ['en' => 'Retail', 'es' => 'Venta al por menor'],
            ],
            [
                'slug' => 'wholesale', 
                'name' => ['en' => 'Wholesale', 'es' => 'Venta al por mayor'],
            ],
            [
                'slug' => 'service', 
                'name' => ['en' => 'Service', 'es' => 'Servicio'],
            ],
            [
                'slug' => 'manufacturing', 
                'name' => ['en' => 'Manufacturing', 'es' => 'Manufactura'],
            ],
            [
                'slug' => 'agriculture', 
                'name' => ['en' => 'Agriculture', 'es' => 'Agricultura'],
            ],
            [
                'slug' => 'construction', 
                'name' => ['en' => 'Construction', 'es' => 'Construcción'],
            ],
            [
                'slug' => 'transportation', 
                'name' => ['en' => 'Transportation', 'es' => 'Transporte'],
            ],
            [
                'slug' => 'healthcare', 
                'name' => ['en' => 'Healthcare', 'es' => 'Salud'],
            ],
            [
                'slug' => 'education', 
                'name' => ['en' => 'Education', 'es' => 'Educación'],
            ],
            [
                'slug' => 'hospitality', 
                'name' => ['en' => 'Hospitality', 'es' => 'Hospitalidad'],
            ],
            [
                'slug' => 'finance', 
                'name' => ['en' => 'Finance', 'es' => 'Finanzas'],
            ],
            [
                'slug' => 'real_estate', 
                'name' => ['en' => 'Real Estate', 'es' => 'Bienes raíces'],
            ],
            [
                'slug' => 'technology', 
                'name' => ['en' => 'Technology', 'es' => 'Tecnología'],
            ],
            [
                'slug' => 'entertainment', 
                'name' => ['en' => 'Entertainment', 'es' => 'Entretenimiento'],
            ],
            [
                'slug' => 'non_profit', 
                'name' => ['en' => 'Non-Profit', 'es' => 'Sin fines de lucro'],
            ],

        ];

        foreach ($items as $item) {
            \App\Models\BusinessType::create($item);
        }
    }
}
