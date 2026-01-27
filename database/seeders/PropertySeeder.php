<?php

namespace Database\Seeders;

use App\Traits\PropertyNumber;
use App\Traits\PropertyUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    use PropertyUlid, PropertyNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'slug' => 'parking_space',
                'name' => ['en' => 'Parking Space', 'es' => 'Espacio de Estacionamiento']
            ],
            [
                'slug' => 'park',
                'name' => ['en' => 'Park', 'es' => 'Parque']
            ],
            [
                'slug' => 'convention_center',
                'name' => ['en' => 'Community Event Space', 'es' => 'Espacio para Eventos Comunitarios']
            ]
        ];

        foreach ($types as $type) {
            \App\Models\PropertyType::create($type);
        }

        $properties = [
            [
                'ulid' => $this->createPropertyUlid(),
                'number' => $this->createPropertyNumber(),
                'property_type_id' => 1,
                'name' => 'Central Park Parking',
                'address' => '123 Main St',
                'postal_code' => '10001',
                'place_id' => 1
            ],
            [
                'ulid' => $this->createPropertyUlid(),
                'number' => $this->createPropertyNumber(),
                'property_type_id' => 2,
                'name' => 'Riverside Park',
                'address' => '456 River Rd',
                'postal_code' => '10002',
                'place_id' => 2
            ],
            [
                'ulid' => $this->createPropertyUlid(),
                'number' => $this->createPropertyNumber(),
                'property_type_id' => 3,
                'name' => 'Downtown Convention Center',
                'address' => '789 Center Ave',
                'postal_code' => '10003',
                'place_id' => 3
            ]
        ];

        foreach ($properties as $property) {
            \App\Models\Property::create($property);
        }

        $amounts = [
            [
                'property_id' => 1,
                'amount' => 50.00
            ],
            [
                'property_id' => 2,
                'amount' => 0.00
            ],
            [
                'property_id' => 3,
                'amount' => 200.00
            ]
        ];

        foreach ($amounts as $amount) {
            \App\Models\PropertyRent::create($amount);
        }
    }
}
