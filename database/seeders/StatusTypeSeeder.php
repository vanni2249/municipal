<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTypeSeeder extends Seeder
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
            [
                'slug' => 'open',
                'name' => [
                    'en' => 'Open',
                    'es' => 'Abierto',
                ],
                'variant' => 'primary',

            ],
            [
                'slug' => 'archived',
                'name' => [
                    'en' => 'Archived',
                    'es' => 'Archivado',
                ],
                'variant' => 'dark',
            ],
            [
                'slug' => 'deleted',
                'name' => [
                    'en' => 'Deleted',
                    'es' => 'Eliminado',
                ],
                'variant' => 'danger',
            ],
            [
                'slug' => 'verified',
                'name' => [
                    'en' => 'Verified',
                    'es' => 'Verificado',
                ],
                'variant' => 'primary',
            ],
            [
                'slug' => 'unverified',
                'name' => [
                    'en' => 'Unverified',
                    'es' => 'No verificado',
                ],
                'variant' => 'light',
            ],
            [
                'slug' => 'on_hold',
                'name' => [
                    'en' => 'On Hold',
                    'es' => 'En espera',
                ],
                'variant' => 'warning',
            ],
            [
                'slug' => 'completed',
                'name' => [
                    'en' => 'Completed',
                    'es' => 'Completado',
                ],
                'variant' => 'success',
            ],
            [
                'slug' => 'failed',
                'name' => [
                    'en' => 'Failed',
                    'es' => 'Fallido',
                ],
                'variant' => 'danger',
            ],
            [
                'slug' => 'processing',
                'name' => [
                    'en' => 'Processing',
                    'es' => 'Procesando',
                ],
                'variant' => 'info',
            ],
            [
                'slug' => 'rejected',
                'name' => [
                    'en' => 'Rejected',
                    'es' => 'Rechazado',
                ],
                'variant' => 'danger',
            ]
        ];

        foreach ($items as $item) {
            \App\Models\StatusType::create($item);
        }
    }
}
