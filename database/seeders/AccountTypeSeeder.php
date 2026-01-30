<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'citizen',
                'name' => [
                    'en' => 'Citizen',
                    'es' => 'Ciudadano',
                ],
            ],
            [
                'slug' => 'business',
                'name' => [
                    'en' => 'Business',
                    'es' => 'Negocio',
                ],
            ],
            [
                'slug' => 'accountant',
                'name' => [
                    'en' => 'Accountant',
                    'es' => 'Contador',
                ],
            ],
        ];

        foreach ($items as $item) {
            \App\Models\AccountType::create($item);
        }
    }
}
