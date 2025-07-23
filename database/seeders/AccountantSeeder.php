<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Accountant 1', 'email' => 'accountant1@example.com', 'number' => uniqid()],
            ['name' => 'Accountant 2', 'email' => 'accountant2@example.com', 'number' => uniqid()],
            ['name' => 'Accountant 3', 'email' => 'accountant3@example.com', 'number' => uniqid()],
            ['name' => 'Accountant 4', 'email' => 'accountant4@example.com', 'number' => uniqid()],
        ];

        foreach ($items as $item) {
            \App\Models\Accountant::create([

                'name' => $item['name'],
                'number' => $item['number'],
                'email' => $item['email'],
                'code' => uniqid('ACC-'),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }

        $users = [
            ['user_category_id' => 3, 'name' => 'Accountant User 1', 'email' => 'accountant1@example.com', 'password' => bcrypt('password'), 'approved_at' => null],
            ['user_category_id' => 3, 'name' => 'Accountant User 2', 'email' => 'accountant2@example.com', 'password' => bcrypt('password'), 'approved_at' => now()],
            ['user_category_id' => 3, 'name' => 'Accountant User 3', 'email' => 'accountant3@example.com', 'password' => bcrypt('password'), 'approved_at' => null],
            ['user_category_id' => 3, 'name' => 'Accountant User 4', 'email' => 'accountant4@example.com', 'password' => bcrypt('password'), 'approved_at' => now()],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user)->accountant()->create([
                'code' => uniqid('ACC-'),
                'number' => uniqid(),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }
    }
}
