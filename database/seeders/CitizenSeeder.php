<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com'],
            ['name' => 'Bob Brown', 'email' => 'bob@example.com'],
        ];

        foreach ($items as $item) {
            \App\Models\Citizen::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'code' => uniqid('CIT-'),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
                'date_of_birth' => now()->subYears(rand(18, 65))->toDateString(),
            ]);
        }

        $users = [
            ['user_category_id' => 1, 'name' => 'Citizen User 1', 'email' => 'citizen1@example.com', 'password' => bcrypt('password')],
            ['user_category_id' => 1, 'name' => 'Citizen User 2', 'email' => 'citizen2@example.com', 'password' => bcrypt('password')],
            ['user_category_id' => 1, 'name' => 'Citizen User 3', 'email' => 'citizen3@example.com', 'password' => bcrypt('password')],
            ['user_category_id' => 1, 'name' => 'Citizen User 4', 'email' => 'citizen4@example.com', 'password' => bcrypt('password')],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user)->citizen()->create([
                'code' => uniqid('CIT-'),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
                'date_of_birth' => now()->subYears(rand(18, 65))->toDateString(),
            ]);
        }


    }
}
