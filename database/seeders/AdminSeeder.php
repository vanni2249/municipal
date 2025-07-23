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
                'name' => 'Employee Admin',
                'email' => 'employeeadmin@example.com',
                'username' => 'employeeadmin',
                'password' => bcrypt('password'),
                'is_developer' => false,
                'phone' => '123-456-7890',
                'blocked_at' => null,
                'blocked_by' => null,
                'blocked_reason' => null,
                'last_login_at' => null,
            ],
            [
                'name' => 'Developer Admin',
                'email' => 'developeradmin@example.com',
                'username' => 'developeradmin',
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
