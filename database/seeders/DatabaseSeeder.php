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
            UserStatusTypeSeeder::class,
            UserSeeder::class,
            AdminStatusTypeSeeder::class,
            AdminSeeder::class,
            PlaceTypeSeeder::class,
            PlaceSeeder::class,
            AccountTypeSeeder::class,
            AccountSeeder::class,
            AccountStatusTypeSeeder::class,
            AccountStatusSeeder::class,
            BusinessTypeSeeder::class,
            BusinessStatusTypeSeeder::class,
            BusinessSeeder::class,
            // TypeSeeder::class,
            // ActionCategorySeeder::class,
            // AdminSeeder::class,
            // PlaceSeeder::class,
            // RegisterSeeder::class,
            // ServiceCategorySeeder::class,
            // ServiceSeeder::class,
            // BusinessTypeSeeder::class,
            // BusinessCategorySeeder::class,
            // BusinessSeeder::class,
            // DebrisTypeSeeder::class,
            // ActionCategorySeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
