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
            LogTypeSeeder::class,
            // LogUserTypeSeeder::class,
            // LogAdminTypeSeeder::class,
            StatusTypeSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            PlaceTypeSeeder::class,
            PlaceSeeder::class,
            AccountTypeSeeder::class,
            AccountSeeder::class,
            BusinessTypeSeeder::class,
            BusinessSeeder::class,
            MergeSeeder::class,
            ServiceTypeSeeder::class,
            ServiceSeeder::class,
            PropertySeeder::class,
            AddressSeeder::class,
            InspectionTypeSeeder::class,
            TransactionMethodTypeSeeder::class,
            // ApplicationSeeder::class,
            // RouteTypeSeeder::class,
            // RouteSeeder::class,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
