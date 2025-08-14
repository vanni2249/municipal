<?php

namespace Database\Seeders;

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
            ActionCategorySeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            RegisterSeeder::class,
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
            BusinessTypeSeeder::class,
            BusinessCategorySeeder::class,
            BusinessSeeder::class,
            PlaceSeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
