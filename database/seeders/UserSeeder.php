<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'user_category_id' => 1,
                'name' => 'John Doe',
                'email' => 'ciudadano@email.com',
                'password' => bcrypt('password'),
                'date_of_birth' => '1990-01-01',
                'phone' => '1234567890',
                'address' => '123 Main St',
                'city' => 'Springfield',
                'postal_code' => '12345',
                'approved_at' => now(),
                'last_login_at' => now(),
            ],
            [
                'user_category_id' => 2,
                'name' => 'Jane Smith',
                'email' => 'comerciante@email.com',
                'password' => bcrypt('password'),
                'date_of_birth' => '1992-02-02',
                'phone' => '0987654321',
                'company_name' => 'Jane\'s Shop',
                'number' => '456-789-0123',
                'address' => '456 Elm St',
                'city' => 'Shelbyville',
                'postal_code' => '54321',
                'approved_at' => now(),
                'last_login_at' => now(),
            ],
            [
                'user_category_id' => 3,
                'name' => 'Bob Johnson',
                'email' => 'contador@email.com',
                'password' => bcrypt('password'),
                'date_of_birth' => '1985-03-03',
                'phone' => '5678901234',
                'company_name' => 'Bob\'s Accounting',
                'number' => '567-890-1234',
                'address' => '789 Oak St',
                'city' => 'Capital City',
                'postal_code' => '67890',
            ],
            [
                'user_category_id' => 4,
                'name' => 'Alice Brown',
                'email' => 'contratista@email.com',
                'password' => bcrypt('password'),
                'date_of_birth' => '1980-04-04',
                'phone' => '6789012345',
                'address' => '321 Pine St',
                'city' => 'Metropolis',
                'postal_code' => '13579',
            ],
            [
                'user_category_id' => 5,
                'name' => 'Charlie Davis',
                'email' => 'proveedor@email.com',
                'password' => bcrypt('password'),
                'date_of_birth' => '1975-05-05',
                'phone' => '7890123456',
                'company_name' => 'Charlie\'s Supplies',
                'number' => '678-901-2345',
                'address' => '654 Cedar St',
                'city' => 'Smallville',
                'postal_code' => '24680',
            ],
            [
                'user_category_id' => 6,
                'name' => 'John Visitor',
                'email' => 'visitante@email.com',
                'password' => bcrypt('password'),
                'date_of_birth' => '1990-01-01',
                'phone' => '1234567890',
                'address' => '123 Admin St',
                'city' => 'Admin City',
                'postal_code' => '12345',
                'approved_at' => now(),
                'last_login_at' => now(),
            ],
        ];

        foreach ($items as $item) {
            \App\Models\User::create($item);
        }
    }
}
