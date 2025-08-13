<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'Geovanni',
                'lastname' => 'Colon Barrios',
                'date_of_birth' => '1980-10-26',
                'email' => 'vanni2249@gmail.com',
                'username' => 'colong1',
                'password' => bcrypt('password'),
                'is_developer' => true,
                'phone' => '123-456-7890',
                'blocked_at' => null,
                'blocked_by' => null,
                'blocked_reason' => null,
                'last_login_at' => null,
            ],
            [
                'name' => 'Angel',
                'lastname' => 'Colon Barrios',
                'date_of_birth' => '1977-05-29',
                'email' => 'colon.angel1@gmail.com',
                'username' => 'colona1',
                'password' => bcrypt('password'),
                'is_developer' => true,
                'phone' => '123-456-7890',
                'blocked_at' => null,
                'blocked_by' => null,
                'blocked_reason' => null,
                'last_login_at' => null,
            ],
            [
                'name' => 'Angel F',
                'lastname' => 'Colon Barrios',
                'date_of_birth' => '1998-4-28',
                'email' => 'fabian4126@gmail.com',
                'username' => 'colona2',
                'password' => bcrypt('password'),
                'is_developer' => true,
                'phone' => '123-456-7890',
                'blocked_at' => null,
                'blocked_by' => null,
                'blocked_reason' => null,
                'last_login_at' => null,
            ]
        ];

        foreach ($items as $item) {
            \App\Models\Admin::create($item);
        }
    }
}
