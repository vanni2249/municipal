<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $items = [
            ['name' => 'Merchant 1', 'email' => 'merchant1@example.com', 'number' => uniqid()],
            ['name' => 'Merchant 2', 'email' => 'merchant2@example.com', 'number' => uniqid()],
            ['name' => 'Merchant 3', 'email' => 'merchant3@example.com', 'number' => uniqid()],
            ['name' => 'Merchant 4', 'email' => 'merchant4@example.com', 'number' => uniqid()],
        ];

        foreach ($items as $item) {
            \App\Models\Merchant::create([
                'name' => $item['name'],
                'number' => $item['number'],
                'email' => $item['email'],
                'code' => uniqid('MER-'),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }

        $users = [
            ['user_category_id' => 2, 'name' => 'Merchant User 1', 'email' => 'merchant1@example.com', 'password' => bcrypt('password'), 'approved_at' => null],
            ['user_category_id' => 2, 'name' => 'Merchant User 2', 'email' => 'merchant2@example.com', 'password' => bcrypt('password'), 'approved_at' => now()],
            ['user_category_id' => 2, 'name' => 'Merchant User 3', 'email' => 'merchant3@example.com', 'password' => bcrypt('password'), 'approved_at' => null],
            ['user_category_id' => 2, 'name' => 'Merchant User 4', 'email' => 'merchant4@example.com', 'password' => bcrypt('password'), 'approved_at' => now()],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user)->merchant()->create([
                'code' => uniqid('MER-'),
                'number' => uniqid(),
                'phone' => '123-456-7890',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'postal_code' => '12345',
            ]);
        }
    }
}
