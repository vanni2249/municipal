<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'active', 
                'name' => ['en' => 'Active', 'es' => 'Activo'],
            ],
            [
                'slug' => 'inactive', 
                'name' => ['en' => 'Inactive', 'es' => 'Inactivo'],
            ],
            [
                'slug' => 'archived', 
                'name' => ['en' => 'Archived', 'es' => 'Archivado'],
            ],
            [
                'slug' => 'closed', 
                'name' => ['en' => 'Closed', 'es' => 'Cerrado'],
            ],
        ];
        foreach ($items as $item) {
            \App\Models\BusinessStatusType::create($item);
        }
    }
}
