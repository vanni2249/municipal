<?php

namespace Database\Seeders;

use App\Models\AdminStatusType;
use App\Models\Admin;
use App\Traits\AdminNumber;
use App\Traits\AdminUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    use AdminUlid, AdminNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'ulid' => $this->createAdminUlid(),
                'number' => $this->createAdminNumber(),
                'name' => 'Geovanni',
                'lastname' => 'Colon Barrios',
                'email' => 'vanni2249@gmail.com',
                'username' => 'colong1',
                'password' => bcrypt('password'),
                'phone' => '123-456-7890',
                'date_of_birth' => '1980-10-26',
            ],
            [
                'ulid' => $this->createAdminUlid(),
                'number' => $this->createAdminNumber(),
                'name' => 'Angel',
                'lastname' => 'Colon Barrios',
                'email' => 'colon.angel1@gmail.com',
                'username' => 'colona1',
                'password' => bcrypt('password'),
                'phone' => '123-456-7890',
                'date_of_birth' => '1977-05-29',
            ],
            [
                'ulid' => $this->createAdminUlid(),
                'number' => $this->createAdminNumber(),
                'name' => 'Angel F',
                'lastname' => 'Colon Barrios',
                'email' => 'fabian4126@gmail.com',
                'username' => 'colona2',
                'password' => bcrypt('password'),
                'phone' => '123-456-7890',
                'date_of_birth' => '1998-04-28',

            ]
        ];

        foreach ($items as $item) {
            Admin::create($item);
        }

         foreach (Admin::all() as $admin) {
            $admin->statuses()->create([
                'admin_status_type_id' => AdminStatusType::inRandomOrder()->first()->id,
            ]);
        }
    }
}
