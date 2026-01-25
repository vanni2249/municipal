<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'pending',
                'name' => [
                    'en' => 'Pending',
                    'es' => 'Pendiente',
                ],
                'variant' => 'info',    
            ],
            [
                'slug' => 'active',
                'name' => [
                    'en' => 'Active',
                    'es' => 'Activo',
                ],
                'variant' => 'success',
            ],
            [
                'slug' => 'inactive',
                'name' => [
                    'en' => 'Inactive',
                    'es' => 'Inactivo',
                ],
                'variant' => 'secondary',
            ],
            [
                'slug' => 'suspended',
                'name' => [
                    'en' => 'Suspended',
                    'es' => 'Suspendido',
                ],
                'variant' => 'warning',
            ],
            [
                'slug' => 'closed',
                'name' => [
                    'en' => 'Closed',
                    'es' => 'Cerrado',
                ],
                'variant' => 'danger',
            ],
        ];

        foreach ($items as $item) {
            \App\Models\AccountStatusType::create($item);
        }

    }
}
