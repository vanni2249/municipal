<?php

namespace Database\Seeders;

use App\Traits\InteractionUlid;
use App\Traits\ServiceNumber;
use App\Traits\ServiceUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ServiceSeeder extends Seeder
{
    use ServiceUlid, ServiceNumber, InteractionUlid, \App\Traits\InteractionNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-citizen-property-use',
                'title' => [
                    'en' => 'Request municipal property use',
                    'es' => 'Solicitar uso de propiedad municipal',
                ],
                'description' => [
                    'en' => 'Request the use of a municipal property for various purposes. Example: community events, recreational activities, etc.',
                    'es' => 'Solicitud del uso de una propiedad municipal para diversos fines. Ejemplo: eventos comunitarios, actividades recreativas, etc.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
                
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-citizen-property-rent',
                'title' => [
                    'en' => 'Request municipal property rent',
                    'es' => 'Solicitud de alquiler de propiedad municipal',
                ],
                'description' => [
                    'en' => 'Request to rent a municipal property for not licit or commercial use.',
                    'es' => 'Solicitud de alquiler de una propiedad municipal para uso no lícito o comercial.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 3,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-citizen-residencial-removal-debris',
                'title' => [
                    'en' => 'Request residential debris removal',
                    'es' => 'Solicitud de retiro de escombros residenciales',
                ],
                'description' => [
                    'en' => 'Request the removal of residential debris from your property by the municipal services.',
                    'es' => 'Solicitud de retiro de escombros residenciales de su propiedad por los servicios municipales.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
                'amount' => 50.00,
                'fee' => 5.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-citizen-report-property-damage',
                'title' => [
                    'en' => 'Report m property damage',
                    'es' => 'Reporte de daños a la propiedad municipal',
                ],
                'description' => [
                    'en' => 'Report any damage to public or private property within the municipality.',
                    'es' => 'Reportar cualquier daño a la propiedad pública o privada dentro del municipio.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-citizen-register-special-person',
                'title' => [
                    'en' => 'Register special person',
                    'es' => 'Registro de persona especial',
                ],
                'description' => [
                    'en' => 'Register individuals with special needs or circumstances for municipal assistance and services.',
                    'es' => 'Registrar a individuos con necesidades o circunstancias especiales para asistencia y servicios municipales.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 1,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-citizen-residencial-construction-permit',
                'title' => [
                    'en' => 'Application for residential construction permit',
                    'es' => 'Solicitud de permiso de construcción residencial',
                ],
                'description' => [
                    'en' => 'Application for a permit to carry out residential construction projects within the municipality.',
                    'es' => 'Solicitud de permiso para llevar a cabo proyectos de construcción residencial dentro del municipio.',
                ],
                'account_type_id' => 1,
                'service_type_id' => 2,
                'amount' => 200.00,
                'fee' => 20.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-remove-trash',
                'title' => [
                    'en' => 'Application for garbage removal service',
                    'es' => 'Solicitud de servicio de recolección de basura para negocios',
                ],
                'description' => [
                    'en' => 'Application for the municipal garbage removal service for your business premises.',
                    'es' => 'Solicitud de servicio municipal de recolección de basura para sus instalaciones comerciales.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 1,
                'amount' => 100.00,
                'fee' => 10.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-remove-debris',
                'title' => [
                    'en' => 'Application for debris removal service',
                    'es' => 'Solicitud de servicio de retiro de escombros para negocios',
                ],
                'description' => [
                    'en' => 'Application for the municipal debris removal service for your business premises.',
                    'es' => 'Solicitud de servicio municipal de retiro de escombros para sus instalaciones comerciales.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 1,
                'amount' => 150.00,
                'fee' => 15.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-construction-permit',
                'title' => [
                    'en' => 'Application for Business Construction Permit',
                    'es' => 'Solicitud de Permiso de Construcción Comercial',
                ],
                'description' => [
                    'en' => 'Application for a permit to carry out construction projects for your business within the municipality.',
                    'es' => 'Solicitud de un permiso para llevar a cabo proyectos de construcción para su negocio dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
                'amount' => 300.00,
                'fee' => 30.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-use-permit',
                'title' => [
                    'en' => 'Application for Business Use Permit',
                    'es' => 'Solicitud de Permiso de Uso Comercial',
                ],
                'description' => [
                    'en' => 'Application for a permit to use municipal properties for your business activities.',
                    'es' => 'Solicitud de un permiso para usar propiedades municipales para las actividades de su negocio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
                'amount' => 20.00,
                'fee' => 5.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-temporary-patent',
                'title' => [
                    'en' => 'Application for Temporary Business Patent',
                    'es' => 'Solicitud de Patente Comercial Temporal',
                ],
                'description' => [
                    'en' => 'Application for a temporary patent to operate your business within the municipality.',
                    'es' => 'Solicitud de una patente temporal para operar su negocio dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
                'amount' => 50.00,
                'fee' => 10.00,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-renew-patent',
                'title' => [
                    'en' => 'Renewal of Business Patent',
                    'es' => 'Renovación de Patente Comercial',
                ],
                'description' => [
                    'en' => 'Renewal of your existing business patent to continue operating legally within the municipality.',
                    'es' => 'Renovación de patente comercial existente para continuar operando legalmente dentro del municipio.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
            ],
            [
                'ulid' => $this->createServiceUlid(),
                'number' => $this->createServiceNumber(),
                'slug' => 'app-business-report-tax',
                'title' => [
                    'en' => 'Business Tax Report',
                    'es' => 'Informe de Impuestos Comerciales',
                ],
                'description' => [
                    'en' => 'Business tax report for the specified tax period as required by municipal regulations.',
                    'es' => 'Informe de impuestos comerciales para el período fiscal especificado según lo requerido por las regulaciones municipales.',
                ],
                'account_type_id' => 2,
                'service_type_id' => 2,
            ]

        ];

        foreach ($items as $item) {
            \App\Models\Service::create($item);
        }


        // $service = \App\Models\Service::find(1);

        // $interaction = $service->interactions()->create([
        //     'ulid' => $this->createInteractionUlid(),
        //     'number' => $this->createInteractionNumber(),
        //     'interaction_type_id' => 1,
        //     'account_id' => 1,
        // ]);
        // $interaction->statuses()->create([
        //     'status_type_id' => 2,
        //     'changed_by' => 1,
        //     'reason' => 'Initial status interaction',
        // ]);

        // $interaction->messages()->create([
        //     'message' => 'This is the initial message for the service interaction.',
        //     'created_account_id' => 1,
        // ]);
    
    }
}
