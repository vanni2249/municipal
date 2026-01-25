<?php

namespace Database\Seeders;

use App\Traits\AccountNumber;
use App\Traits\AccountUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    use AccountUlid, AccountNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'ulid' => $this->createAccountUlid(),
                'number' => $this->createAccountNumber(),
                'account_type_id' => 1,
                'place_id' => 1,
                'user_id' => 1,
                'is_default' => true,
            ],
            [
                'ulid' => $this->createAccountUlid(),
                'number' => $this->createAccountNumber(),
                'account_type_id' => 2,
                'place_id' => 2,
                'name' => 'Kariani A',
                'lastname' => 'Colon',
                'email' => 'kariani@example.com',
                'phone' => '555-5678',
                'user_id' => 2,
                'is_default' => false,
            ]
        ];

        foreach ($items as $item) {
            \App\Models\Account::create($item);
        }

    }
}
