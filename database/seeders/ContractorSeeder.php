<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Contractor 1', 'email' => 'contractor1@example.com', 'number' => uniqid()],
            ['name' => 'Contractor 2', 'email' => 'contractor2@example.com', 'number' => uniqid()],
            ['name' => 'Contractor 3', 'email' => 'contractor3@example.com', 'number' => uniqid()],
            ['name' => 'Contractor 4', 'email' => 'contractor4@example.com', 'number' => uniqid()],
        ];

        foreach ($items as $item) {
            \App\Models\Contractor::create([
                'name' => $item['name'],
                'number' => $item['number'],
                'email' => $item['email'],
                'code' => uniqid('CON-'),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }

        $users = [
            ['user_category_id' => 4, 'name' => 'Contractor User 1', 'email' => 'contractor1@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => null],
            ['user_category_id' => 4, 'name' => 'Contractor User 2', 'email' => 'contractor2@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => now()],
            ['user_category_id' => 4, 'name' => 'Contractor User 3', 'email' => 'contractor3@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => null],
            ['user_category_id' => 4, 'name' => 'Contractor User 4', 'email' => 'contractor4@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => now()],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user)->contractor()->create([
                'code' => uniqid('CON-'),
                'number' => uniqid(),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }
    }
}
