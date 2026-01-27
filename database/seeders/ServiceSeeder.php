<?php

namespace Database\Seeders;

use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ServiceSeeder extends Seeder
{
    use BusinessUlid, BusinessNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-citizen-property-use',
                'title' => [
                    'en' => 'Request Municipal Property Use',
                    'es' => 'Solicitar Uso de Propiedad Municipal',
                ],
                'description' => [
                    'en' => 'Request the use of a municipal property for various purposes. Example: community events, recreational activities, etc.',
                    'es' => 'Solicitar el uso de una propiedad municipal para diversos fines. Ejemplo: eventos comunitarios, actividades recreativas, etc.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
                
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-citizen-property-rent',
                'title' => [
                    'en' => 'Request Municipal Property Rent',
                    'es' => 'Solicitar Alquiler de Propiedad Municipal',
                ],
                'description' => [
                    'en' => 'Request to rent a municipal property for not licit or commercial use.',
                    'es' => 'Solicitar el alquiler de una propiedad municipal para uso no lícito o comercial.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 3,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-citizen-residencial-removal-debris',
                'title' => [
                    'en' => 'Request Residential Debris Removal',
                    'es' => 'Solicitar Retiro de Escombros Residenciales',
                ],
                'description' => [
                    'en' => 'Request the removal of residential debris from your property by the municipal services.',
                    'es' => 'Solicitar el retiro de escombros residenciales de su propiedad por los servicios municipales.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
                'amount' => 50.00,
                'fee' => 5.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-citizen-report-property-damage',
                'title' => [
                    'en' => 'Report Property Damage',
                    'es' => 'Reportar Daños a la Propiedad',
                ],
                'description' => [
                    'en' => 'Report any damage to public or private property within the municipality.',
                    'es' => 'Reportar cualquier daño a la propiedad pública o privada dentro del municipio.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-citizen-register-special-person',
                'title' => [
                    'en' => 'Register Special Person',
                    'es' => 'Registrar Persona Especial',
                ],
                'description' => [
                    'en' => 'Register individuals with special needs or circumstances for municipal assistance and services.',
                    'es' => 'Registrar a individuos con necesidades o circunstancias especiales para asistencia y servicios municipales.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-citizen-residencial-construction-permit',
                'title' => [
                    'en' => 'Apply for Residential Construction Permit',
                    'es' => 'Solicitar Permiso de Construcción Residencial',
                ],
                'description' => [
                    'en' => 'Apply for a permit to carry out residential construction projects within the municipality.',
                    'es' => 'Solicitar un permiso para llevar a cabo proyectos de construcción residencial dentro del municipio.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 2,
                'amount' => 200.00,
                'fee' => 20.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-remove-trash',
                'title' => [
                    'en' => 'Apply for garbage removal service',
                    'es' => 'Solicitar servicio de recolección de basura',
                ],
                'description' => [
                    'en' => 'Request the municipal garbage removal service for your business premises.',
                    'es' => 'Solicitar el servicio municipal de recolección de basura para sus instalaciones comerciales.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 1,
                'amount' => 100.00,
                'fee' => 10.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-remove-debris',
                'title' => [
                    'en' => 'Apply for debris removal service',
                    'es' => 'Solicitar servicio de retiro de escombros',
                ],
                'description' => [
                    'en' => 'Request the municipal debris removal service for your business premises.',
                    'es' => 'Solicitar el servicio municipal de retiro de escombros para sus instalaciones comerciales.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 1,
                'amount' => 150.00,
                'fee' => 15.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-construction-permit',
                'title' => [
                    'en' => 'Apply for Business Construction Permit',
                    'es' => 'Solicitar Permiso de Construcción Comercial',
                ],
                'description' => [
                    'en' => 'Apply for a permit to carry out construction projects for your business within the municipality.',
                    'es' => 'Solicitar un permiso para llevar a cabo proyectos de construcción para su negocio dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
                'amount' => 300.00,
                'fee' => 30.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-use-permit',
                'title' => [
                    'en' => 'Apply for Business Use Permit',
                    'es' => 'Solicitar Permiso de Uso Comercial',
                ],
                'description' => [
                    'en' => 'Apply for a permit to use municipal properties for your business activities.',
                    'es' => 'Solicitar un permiso para usar propiedades municipales para las actividades de su negocio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
                'amount' => 20.00,
                'fee' => 5.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-temporary-patent',
                'title' => [
                    'en' => 'Apply for Temporary Business Patent',
                    'es' => 'Solicitar Patente Comercial Temporal',
                ],
                'description' => [
                    'en' => 'Apply for a temporary patent to operate your business within the municipality.',
                    'es' => 'Solicitar una patente temporal para operar su negocio dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
                'amount' => 50.00,
                'fee' => 10.00,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-official-patent',
                'title' => [
                    'en' => 'Apply for Official Business Patent',
                    'es' => 'Solicitar Patente Comercial Oficial',
                ],
                'description' => [
                    'en' => 'Apply for an official patent to legally operate your business within the municipality.',
                    'es' => 'Solicitar una patente oficial para operar legalmente su negocio dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-renew-patent',
                'title' => [
                    'en' => 'Renew Business Patent',
                    'es' => 'Renovar Patente Comercial',
                ],
                'description' => [
                    'en' => 'Renew your existing business patent to continue operating legally within the municipality.',
                    'es' => 'Renovar su patente comercial existente para continuar operando legalmente dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
            ],
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'slug' => 'app-business-arbitrary-act',
                'title' => [
                    'en' => 'Request Arbitrary Act Service',
                    'es' => 'Solicitar Servicio de Acto Arbitrario',
                ],
                'description' => [
                    'en' => 'Request an arbitrary act service for your business as needed.',
                    'es' => 'Solicitar un servicio de acto arbitrario para su negocio según sea necesario.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
            ]

        ];

        foreach ($items as $item) {
            \App\Models\Service::create($item);
        }

    }
}
