<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Supplier 1', 'email' => 'supplier1@example.com', 'number' => uniqid()],
            ['name' => 'Supplier 2', 'email' => 'supplier2@example.com', 'number' => uniqid()],
            ['name' => 'Supplier 3', 'email' => 'supplier3@example.com', 'number' => uniqid()],
            ['name' => 'Supplier 4', 'email' => 'supplier4@example.com', 'number' => uniqid()],
        ];

        foreach ($items as $item) {
            \App\Models\Supplier::create([
                'name' => $item['name'],
                'number' => $item['number'],
                'email' => $item['email'],
                'code' => uniqid('SUP-'),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }

        $users = [
            ['user_category_id' => 5, 'name' => 'Supplier User 1', 'email' => 'supplier1@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => null],
            ['user_category_id' => 5, 'name' => 'Supplier User 2', 'email' => 'supplier2@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => now()],
            ['user_category_id' => 5, 'name' => 'Supplier User 3', 'email' => 'supplier3@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => null],
            ['user_category_id' => 5, 'name' => 'Supplier User 4', 'email' => 'supplier4@example.com', 'password' => bcrypt('password'), 'phone' => '123-456-7890', 'approved_at' => now()],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user)->supplier()->create([
                'code' => uniqid('SUP-'),
                'number' => uniqid(),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }
    }
}
