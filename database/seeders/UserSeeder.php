<?php

namespace Database\Seeders;

use App\Models\StatusType;
use App\Models\User;
use App\Models\UserStatusType;
use App\Traits\UserNumber;
use App\Traits\UserUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use UserUlid, UserNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'ulid' => $this->createUserUlid(),
                'number' => $this->createUserNumber(),
                'name' => 'Giovanni',
                'lastname' => 'Colon Barrios',
                'email' => 'vanni2249@gmail.com',
                'phone' => '8096822249',
                'password' => bcrypt('password'),
            ],
            [
                'ulid' => $this->createUserUlid(),
                'number' => $this->createUserNumber(),
                'name' => 'Karen',
                'lastname' => 'Colon Barrios',
                'email' => 'karen@email.com',
                'phone' => '8096822249',
                'password' => bcrypt('password'),
            ],
            [
                'ulid' => $this->createUserUlid(),
                'number' => $this->createUserNumber(),
                'name' => 'Admin',
                'lastname' => 'User',
                'email' => 'admin@email.com',
                'phone' => '8096822249',
                'password' => bcrypt('password'),
            ],
            [
                'ulid' => $this->createUserUlid(),
                'number' => $this->createUserNumber(),
                'name' => 'Test',
                'lastname' => 'User',
                'email' => 'test@email.com',
                'phone' => '8096822249',
                'password' => bcrypt('password'),
            ],
            [
                'ulid' => $this->createUserUlid(),
                'number' => $this->createUserNumber(),
                'name' => 'Demo',
                'lastname' => 'User',
                'email' => 'demo@email.com',
                'phone' => '8096822249',
                'password' => bcrypt('password'),
            ]
        ];

        foreach ($items as $item) {
            User::create($item);
        }

        foreach (User::all() as $user) {
            $user->statuses()->create([
                // 'status_type_id' => StatusType::inRandomOrder()->first()->id,
                'status_type_id' => 2,
                'reason' => 'Initial status for user '.$user->number,
            ]);
        }
    }
}
