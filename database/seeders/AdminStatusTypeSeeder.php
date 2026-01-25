<?php

namespace Database\Seeders;

use App\Models\AdminStatusType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'active',
                'name' => [
                    'en' => 'Active',
                    'es' => 'Activo'
                ],
                'variant' => 'success',
            ],
            [
                'slug' => 'inactive',
                'name' => [
                    'en' => 'Inactive',
                    'es' => 'Inactivo'
                ],
                'variant' => 'secondary',
            ],
            [
                'slug' => 'suspended',
                'name' => [
                    'en' => 'Suspended',
                    'es' => 'Suspendido'
                ],
                'variant' => 'warning',
            ],
        ];

        foreach ($items as $item) {
            AdminStatusType::create($item);
        }

    }
}
