<?php

namespace Database\Seeders;

use App\Models\Account;
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
        // 1Create citizen account Giovanni
        $accountFirst = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1,
            'user_id' => 1,
            'is_default' => true,
        ]);

        $accountFirst->addresses()->create([
            'name' => 'Default Account Address',
            'place_id' => 1,
            'address' => '123 Main St, Hometown',
            'postal_code' => '12345',
        ]);

        $accountFirst->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);

        // 2Create citizen account Angel F
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1,
            'user_id' => 2,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);
        //3 Create citizen account Angel M
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1,
            'user_id' => 3,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);

        // 4Create merchant account Giovanni
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2,
            'user_id' => 1,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 5Create merchant account Angel F
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2,
            'user_id' => 2,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 6Create merchant account Angel M
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2,
            'user_id' => 3,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 7Create accountant account Giovanni
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 3,
            'user_id' => 1,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 8Create citizen account not linked to user
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1,
            'name' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@example.com',
        ])->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);
    }
}
