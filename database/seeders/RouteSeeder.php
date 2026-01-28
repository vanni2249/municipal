<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Traits\RouteNumber;
use App\Traits\RouteUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    use RouteUlid, RouteNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Route::create([
            'ulid' => $this->createRouteUlid(),
            'number' => $this->createRouteNumber(),
            'route_type_id' => 1,
            'admin_id' => 1,
        ])->inspections()->attach([1]);
    }
}
