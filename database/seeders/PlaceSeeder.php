<?php

namespace Database\Seeders;

use App\Traits\PlaceNumber;
use App\Traits\PlaceUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    use PlaceUlid, PlaceNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Urbanización 1',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Urbanización 2',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Conjunto Residencial 1',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Conjunto Residencial 2',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Barrio 1',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Barrio 2',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Sector 1',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Sector 2',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Zona 1',
                'place_type_id' => 1,
            ],
            [
                'ulid' => $this->createPlaceUlid(),
                'number' => $this->createPlaceNumber(),
                'name' => 'Zona 2',
                'place_type_id' => 1,
            ],
        ];

        foreach ($items as $item) {
            \App\Models\Place::create($item);
        }
    }
}
