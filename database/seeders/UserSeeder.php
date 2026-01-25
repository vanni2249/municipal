<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserStatusType;
use App\Traits\UserNumber;
use App\Traits\UserUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Jenssegers\Agent\Agent;

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
                'email' => 'giovanni@email.com',
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
                'user_status_type_id' => UserStatusType::inRandomOrder()->first()->id,
            ]);
        }
    }
}
