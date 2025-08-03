<?php

namespace Database\Seeders;

use App\Data\Service;
use App\Models\Citizen;
use App\Models\ServiceCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            TypeSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            RegisterSeeder::class,
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
