<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserStatusType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'active',
                'name' => [
                    'en' => 'Active',
                    'es' => 'Activo'
                ],
                'variant' => 'success',
            ],
            [
                'slug' => 'inactive',
                'name' => [
                    'en' => 'Inactive',
                    'es' => 'Inactivo'
                ],
                'variant' => 'secondary',
            ],
            [
                'slug' => 'suspended',
                'name' => [
                    'en' => 'Suspended',
                    'es' => 'Suspendido'
                ],
                'variant' => 'warning',
            ],
        ];

        foreach ($items as $item) {
            UserStatusType::create($item);
        }

        foreach (User::all() as $user) {
            $user->statuses()->create([
                'user_status_type_id' => UserStatusType::inRandomOrder()->first()->id,
            ]);
        }
    }
}
