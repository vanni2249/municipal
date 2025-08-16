<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'type_id' => 1,
                'code' => 'CIT-' . time(),
                'name' => 'John',
                'lastname' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone' => '1234567890',
                'place_id' => 1,
                'address' => '123 Main St, Anytown, USA',
                'city' => 'Anytown',
                'postal_code' => '12345',
                'date_of_birth' => '1990-01-01',
                'is_veteran' => true,
                'is_age_advanced' => false,
                'is_disabled' => false,
                'created_by' => 'admin',
                'admin_id' => 1,
            ],
            [
                'type_id' => 1,
                'code' => 'CIT-' . (time() + 1),
                'name' => 'Jane',
                'lastname' => 'Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '0987654321',
                'place_id' => 1,
                'address' => '456 Elm St, Othertown, USA',
                'city' => 'Othertown',
                'postal_code' => '54321',
                'date_of_birth' => '1992-02-02',
                'is_veteran' => false,
                'is_age_advanced' => true,
                'is_disabled' => false,
                'created_by' => 'admin',
                'admin_id' => 1,
                'emergency_contact' => 'Emily Smith',
                'emergency_contact_phone' => '3216549870',
            ],
            [
                'type_id' => 1,
                'code' => 'CIT-' . (time() + 2),
                'name' => 'Alice',
                'lastname' => 'Johnson',
                'email' => 'alice.johnson@example.com',
                'phone' => '5555555555',
                'place_id' => 1,
                'address' => '789 Oak St, Sometown, USA',
                'city' => 'Sometown',
                'postal_code' => '67890',
                'date_of_birth' => '1985-03-03',
                'is_veteran' => false,
                'is_age_advanced' => false,
                'is_disabled' => true,
                'created_by' => 'admin',
                'admin_id' => 1,
                'disability_type' => 'Visual Impairment',
                'emergency_contact' => 'Bob Johnson',
                'emergency_contact_phone' => '9876543210',
            ],
            [
                'type_id' => 1,
                'code' => 'CIT-' . (time() + 3),
                'name' => 'Bob',
                'lastname' => 'Brown',
                'email' => 'bob.brown@example.com',
                'phone' => '4444444444',
                'place_id' => 1,
                'address' => '321 Pine St, Anycity, USA',
                'city' => 'Anycity',
                'postal_code' => '13579',
                'date_of_birth' => '1980-04-04',
                'is_disabled' => true,
                'created_by' => 'admin',
                'admin_id' => 1,
                'disability_type' => 'Mobility Impairment',
                'emergency_contact' => 'Charlie Brown',
                'emergency_contact_phone' => '6543219870',
            ],
        ];

        foreach ($items as $item) {
            \App\Models\Register::create($item);
        }
    }
}
