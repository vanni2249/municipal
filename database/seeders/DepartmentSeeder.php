<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5Zy',
            'number' => '031',
            'slug' => 'mayor-office',
            'name' => [
                'en' => 'Administration',
                'es' => 'Oficina del Alcalde',
            ],
            'description' => [
                'en' => 'The Mayor\'s Office is responsible for the overall administration and governance of the municipality.',
                'es' => 'La Oficina del Alcalde es responsable de la administración y gobernanza general del municipio.',
            ],
            'phone' => '123-456-7890',
            'email' => 'mayor@example.com',
            'address' => '123 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Mayor',
                    'es' => 'Alcalde',
                ],
                'description' => [      
                    'en' => 'The Mayor is the chief executive officer of the municipality, responsible for overseeing all departments and ensuring the effective delivery of services to residents.',
                    'es' => 'El Alcalde es el director ejecutivo del municipio, responsable de supervisar todos los departamentos y garantizar la entrega efectiva de servicios a los residentes.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Deputy Mayor',
                    'es' => 'Vicealcalde',
                ],
                'description' => [
                    'en' => 'The Deputy Mayor assists the Mayor in managing the municipality and may act on behalf of the Mayor in their absence.',
                    'es' => 'El Vicealcalde asiste al Alcalde en la gestión del municipio y puede actuar en nombre del Alcalde en su ausencia.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Chief of Staff',
                    'es' => 'Jefe de Gabinete',
                ],
                'description' => [
                    'en' => 'The Chief of Staff is responsible for managing the Mayor\'s schedule, coordinating communication between departments, and overseeing special projects.',
                    'es' => 'El Jefe de Gabinete es responsable de gestionar el horario del Alcalde, coordinar la comunicación entre departamentos y supervisar proyectos especiales.',
                ],
            ],  
        ]);


        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5Zx',
                'number' => '0012',
                'slug' => 'finance-department',
                'name' => [
                    'en' => 'Finance Department',
                    'es' => 'Departamento de Finanzas',
                ],
                'description' => [
                    'en' => 'The Finance Department is responsible for managing the municipality\'s financial resources, including budgeting, accounting, and financial reporting.',
                    'es' => 'El Departamento de Finanzas es responsable de gestionar los recursos financieros del municipio, incluyendo la presupuestación, la contabilidad y la elaboración de informes financieros.',
                ],
                'phone' => '123-456-7891',
                'email' => 'finance@example.com',
                'address' => '124 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Finance Director',
                    'es' => 'Director de Finanzas',
                ],
                'description' => [
                    'en' => 'The Finance Director oversees the financial operations of the municipality, including budgeting, accounting, and financial reporting.',
                    'es' => 'El Director de Finanzas supervisa las operaciones financieras del municipio, incluyendo la presupuestación, la contabilidad y la elaboración de informes financieros.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Accountant',
                    'es' => 'Contador',
                ],
                'description' => [
                    'en' => 'The Accountant is responsible for maintaining financial records, preparing financial statements, and ensuring compliance with financial regulations.',
                    'es' => 'El Contador es responsable de mantener los registros financieros, preparar estados financieros y garantizar el cumplimiento de las regulaciones financieras.',
                ],
            ],
        ]);


        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5Zhs',
                'number' => '002',
                'slug' => 'merchant-office',
                'name' => [
                    'en' => 'Merchant Office',
                    'es' => 'Oficina del Comerciante',
                ],
                'description' => [
                    'en' => 'The Merchant Office is responsible for supporting local businesses and promoting economic development within the municipality.',
                    'es' => 'La Oficina del Comerciante es responsable de apoyar a las empresas locales y promover el desarrollo económico dentro del municipio.',
                ],
                'phone' => '123-456-7891',
                'email' => 'merchant@example.com',
                'address' => '124 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Merchant Director',
                    'es' => 'Director de Comercio',
                ],
                'description' => [
                    'en' => 'The Merchant Director oversees the operations of the Merchant Office, including supporting local businesses, promoting economic development, and coordinating with other departments to enhance the business environment.',
                    'es' => 'El Director de Comercio supervisa las operaciones de la Oficina del Comerciante, incluyendo el apoyo a las empresas locales, la promoción del desarrollo económico y la coordinación con otros departamentos para mejorar el entorno empresarial.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Business Support Specialist',
                    'es' => 'Especialista en Apoyo Empresarial',
                ],
                'description' => [
                    'en' => 'The Business Support Specialist provides assistance to local businesses, including helping with licensing, permits, and connecting businesses with resources and support services.',
                    'es' => 'El Especialista en Apoyo Empresarial brinda asistencia a las empresas locales, incluyendo ayuda con licencias, permisos y conectar a las empresas con recursos y servicios de apoyo.',
                ],
            ],
        ]);

        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5Z7',
                'number' => '003',
                'slug' => 'citizen-office',
                'name' => [
                    'en' => 'Citizen Office',
                    'es' => 'Oficina del Ciudadano',
                ],
                'description' => [
                    'en' => 'The Citizen Office is responsible for providing services and support to residents, including handling inquiries, processing applications, and addressing concerns.',
                    'es' => 'La Oficina del Ciudadano es responsable de brindar servicios y apoyo a los residentes, incluyendo la gestión de consultas, el procesamiento de solicitudes y la atención de preocupaciones.',
                ],
                'phone' => '123-456-7892',
                'email' => 'citizen@example.com',
                'address' => '125 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Citizen Services Manager',
                    'es' => 'Gerente de Servicios al Ciudadano',
                ],
                'description' => [
                    'en' => 'The Citizen Services Manager oversees the operations of the Citizen Office, ensuring that residents receive timely and effective assistance with their inquiries and concerns.',
                    'es' => 'El Gerente de Servicios al Ciudadano supervisa las operaciones de la Oficina del Ciudadano, asegurando que los residentes reciban asistencia oportuna y efectiva con sus consultas y preocupaciones.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Customer Service Representative',
                    'es' => 'Representante de Servicio al Cliente',
                ],
                'description' => [
                    'en' => 'The Customer Service Representative is responsible for assisting residents with their inquiries, processing applications, and providing information about municipal services.',
                    'es' => 'El Representante de Servicio al Cliente es responsable de asistir a los residentes con sus consultas, procesar solicitudes y proporcionar información sobre los servicios municipales.',
                ],
            ],
        ]);


        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5Z8',
                'number' => '004',
                'slug' => 'technology-office',
                'name' => [
                    'en' => 'Technology Office',
                    'es' => 'Oficina de Tecnología',
                ],
                'description' => [
                    'en' => 'The Technology Office is responsible for managing the municipality\'s technology infrastructure, including IT support, cybersecurity, and digital services.',
                    'es' => 'La Oficina de Tecnología es responsable de gestionar la infraestructura tecnológica del municipio, incluyendo el soporte de TI, la ciberseguridad y los servicios digitales.',
                ],
                'phone' => '123-456-7893',
                'email' => 'planning@example.com',
                'address' => '126 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Chief Technology Officer',
                    'es' => 'Director de Tecnología',
                ],
                'description' => [
                    'en' => 'The Chief Technology Officer oversees the municipality\'s technology strategy, ensuring that IT systems are secure, efficient, and aligned with the needs of residents and municipal staff.',
                    'es' => 'El Director de Tecnología supervisa la estrategia tecnológica del municipio, asegurando que los sistemas de TI sean seguros, eficientes y estén alineados con las necesidades de los residentes y el personal municipal.',
                ],
            ],
            [
                'name' => [
                    'en' => 'IT Support Specialist',
                    'es' => 'Especialista en Soporte de TI',
                ],
                'description' => [
                    'en' => 'The IT Support Specialist provides technical support to municipal staff, troubleshooting hardware and software issues, and ensuring that technology systems are functioning properly.',
                    'es' => 'El Especialista en Soporte de TI brinda soporte técnico al personal municipal, solucionando problemas de hardware y software, y asegurando que los sistemas tecnológicos funcionen correctamente.',
                ],
            ],
        ]);

        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5Z9',
                'number' => '005',
                'slug' => 'human-resources-office',
                'name' => [
                    'en' => 'Human Resources Office',
                    'es' => 'Oficina de Recursos Humanos',
                ],
                'description' => [
                    'en' => 'The Human Resources Office is responsible for managing employee relations, recruitment, training, and benefits for municipal staff.',
                    'es' => 'La Oficina de Recursos Humanos es responsable de gestionar las relaciones laborales, el reclutamiento, la capacitación y los beneficios para el personal municipal.',
                ],
                'phone' => '123-456-7894',
                'email' => 'humanresources@example.com',
                'address' => '127 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Human Resources Director',
                    'es' => 'Director de Recursos Humanos',
                ],
                'description' => [
                    'en' => 'The Human Resources Director oversees the municipality\'s human resources functions, including recruitment, employee relations, and benefits administration.',
                    'es' => 'El Director de Recursos Humanos supervisa las funciones de recursos humanos del municipio, incluyendo el reclutamiento, las relaciones laborales y la administración de beneficios.',
                ],
            ],
            [
                'name' => [
                    'en' => 'HR Specialist',
                    'es' => 'Especialista en Recursos Humanos',
                ],
                'description' => [
                    'en' => 'The HR Specialist assists with recruitment, employee relations, and benefits administration, ensuring that the municipality attracts and retains qualified staff.',
                    'es' => 'El Especialista en Recursos Humanos ayuda con el reclutamiento, las relaciones laborales y la administración de beneficios, asegurando que el municipio atraiga y retenga personal calificado.',
                ],
            ],
        ]);

        Department::create([
            'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5ZA',
                'number' => '006',
                'slug' => 'public-works-office',
                'name' => [
                    'en' => 'Public Works Office',
                    'es' => 'Oficina de Obras Públicas',
                ],
                'description' => [
                    'en' => 'The Public Works Office is responsible for maintaining and improving the municipality\'s infrastructure, including roads, bridges, and public facilities.',
                    'es' => 'La Oficina de Obras Públicas es responsable de mantener y mejorar la infraestructura del municipio, incluyendo carreteras, puentes y instalaciones públicas.',
                ],
                'phone' => '123-456-7895',
                'email' => 'publicworks@example.com',
                'address' => '128 Main St, City, Country',
        ])->positions()->createMany([
            [
                'name' => [
                    'en' => 'Public Works Director',
                    'es' => 'Director de Obras Públicas',
                ],
                'description' => [
                    'en' => 'The Public Works Director oversees the maintenance and improvement of the municipality\'s infrastructure, including roads, bridges, and public facilities.',
                    'es' => 'El Director de Obras Públicas supervisa el mantenimiento y la mejora de la infraestructura del municipio, incluyendo carreteras, puentes e instalaciones públicas.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Public Works Supervisor',
                    'es' => 'Supervisor de Obras Públicas',
                ],
                'description' => [
                    'en' => 'The Public Works Supervisor manages the day-to-day operations of the Public Works Office, coordinating maintenance and improvement projects to ensure the safety and functionality of municipal infrastructure.',
                    'es' => 'El Supervisor de Obras Públicas gestiona las operaciones diarias de la Oficina de Obras Públicas, coordinando proyectos de mantenimiento y mejora para garantizar la seguridad y funcionalidad de la infraestructura municipal.',
                ],
            ],
            [
                'name' => [
                    'en' => 'Public Works Worker',
                    'es' => 'Trabajador de Obras Públicas',
                ],
                'description' => [
                    'en' => 'The Public Works Worker performs maintenance and improvement tasks on the municipality\'s infrastructure, including repairing roads, maintaining public facilities, and assisting with construction projects.',
                    'es' => 'El Trabajador de Obras Públicas realiza tareas de mantenimiento y mejora en la infraestructura del municipio, incluyendo la reparación de carreteras, el mantenimiento de instalaciones públicas y la asistencia con proyectos de construcción.',
                ],
            ]
        ]);

        Department::create([
                'ulid' => '01FZ8Z5Z5Z5Z5Z5Z5Z5Z5Z5ZC',
                'number' => '008',
                'slug' => 'recreation-sports-office',
                'name' => [
                    'en' => 'Recreation and Sports Office',
                    'es' => 'Oficina de Recreación y Deportes',
                ],
                'description' => [
                    'en' => 'The Recreation and Sports Office is responsible for organizing recreational activities, sports programs, and community events to promote health and wellness among residents.',
                    'es' => 'La Oficina de Recreación y Deportes es responsable de organizar actividades recreativas, programas deportivos y eventos comunitarios para promover la salud y el bienestar entre los residentes.',
                ],
                'phone' => '123-456-7897',
                'email' => 'recreation@example.com',
                'address' => '130 Main St, City, Country',
            ])->positions()->createMany([
                [
                    'name' => [
                        'en' => 'Recreation Director',
                        'es' => 'Director de Recreación',
                    ],
                    'description' => [
                        'en' => 'The Recreation Director oversees the planning and implementation of recreational activities, sports programs, and community events to promote health and wellness among residents.',
                        'es' => 'El Director de Recreación supervisa la planificación e implementación de actividades recreativas, programas deportivos y eventos comunitarios para promover la salud y el bienestar entre los residentes.',
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Sports Coordinator',
                        'es' => 'Coordinador de Deportes',
                    ],
                    'description' => [
                        'en' => 'The Sports Coordinator organizes and manages sports programs, including scheduling games, coordinating with teams, and ensuring that facilities are available for practices and competitions.',
                        'es' => 'El Coordinador de Deportes organiza y gestiona programas deportivos, incluyendo la programación de juegos, la coordinación con los equipos y asegurando que las instalaciones estén disponibles para prácticas y competiciones.',
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Recreation Specialist',
                        'es' => 'Especialista en Recreación',
                    ],
                    'description' => [
                        'en' => 'The Recreation Specialist assists with the planning and implementation of recreational activities and community events, working to engage residents and promote participation.',
                        'es' => 'El Especialista en Recreación ayuda con la planificación e implementación de actividades recreativas y eventos comunitarios, trabajando para involucrar a los residentes y promover la participación.',
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Maintenance Worker',
                        'es' => 'Trabajador de Mantenimiento',
                    ],
                    'description' => [
                        'en' => 'The Maintenance Worker is responsible for maintaining recreational facilities, including cleaning, repairs, and ensuring that equipment is in good condition for use by residents.',
                        'es' => 'El Trabajador de Mantenimiento es responsable de mantener las instalaciones recreativas, incluyendo la limpieza, reparaciones y asegurando que el equipo esté en buenas condiciones para su uso por los residentes.',
                    ],
                ]
            ]);

    }
}
