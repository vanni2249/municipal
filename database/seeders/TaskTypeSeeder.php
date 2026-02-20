<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'preventive-maintenance',
                'name' => [
                    'en' => 'Preventive Maintenance',
                    'es' => 'Mantenimiento Preventivo',
                ],
                'description' => [
                    'en' => 'Regular maintenance tasks to prevent issues.',
                    'es' => 'Tareas de mantenimiento regular para prevenir problemas.',
                ],
            ],
            [
                'slug' => 'emergency-repair',
                'name' => [
                    'en' => 'Emergency Repair',
                    'es' => 'Reparación de Emergencia',
                ],
                'description' => [
                    'en' => 'Urgent repairs that need immediate attention.',
                    'es' => 'Reparaciones urgentes que requieren atención inmediata.',
                ],
            ],
            [
                'slug' => 'waste-management',
                'name' => [
                    'en' => 'Waste Management',
                    'es' => 'Gestión de Residuos',
                ],
                'description' => [
                    'en' => 'Tasks related to waste collection and disposal.',
                    'es' => 'Tareas relacionadas con la recolección y eliminación de residuos.',
                ],
            ],
            [
                'slug' => 'public-safety',
                'name' => [
                    'en' => 'Public Safety',
                    'es' => 'Seguridad Pública',
                ],
                'description' => [
                    'en' => 'Tasks that ensure the safety of the public.',
                    'es' => 'Tareas que garantizan la seguridad del público.',
                ],
            ],
            [
                'slug' => 'infrastructure-inspection',
                'name' => [
                    'en' => 'Infrastructure Inspection',
                    'es' => 'Inspección de Infraestructura',
                ],
                'description' => [
                    'en' => 'Regular inspections of public infrastructure.',
                    'es' => 'Inspecciones regulares de la infraestructura pública.',
                ],
            ],
            [
                'slug' => 'community-outreach',
                'name' => [
                    'en' => 'Community Outreach',
                    'es' => 'Alcance Comunitario',
                ],
                'description' => [
                    'en' => 'Tasks that involve engaging with the community.',
                    'es' => 'Tareas que implican interactuar con la comunidad.',
                ],
            ],
            [
                'slug' => 'event-management',
                'name' => [
                    'en' => 'Event Management',
                    'es' => 'Gestión de Eventos',
                ],
                'description' => [
                    'en' => 'Organizing and managing public events.',
                    'es' => 'Organización y gestión de eventos públicos.',
                ],
            ],
            [
                'slug' => 'administrative',
                'name' => [
                    'en' => 'Administrative',
                    'es' => 'Administrativo',
                ],
                'description' => [
                    'en' => 'Tasks related to administrative work.',
                    'es' => 'Tareas relacionadas con el trabajo administrativo.',
                ],
            ],
            [
                'slug' => 'other',
                'name' => [
                    'en' => 'Other',
                    'es' => 'Otro',
                ],
                'description' => [
                    'en' => 'Tasks that do not fit into other categories.',
                    'es' => 'Tareas que no encajan en otras categorías.',
                ],
            ]
        ];

        foreach ($items as $item) {
            \App\Models\TaskType::create($item);
        }
    }
}
