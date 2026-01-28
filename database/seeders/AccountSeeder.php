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
        // Create citizen account
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

        // Create merchant account
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2,
            'user_id' => 1,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);

        // Create admin account
        Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 3,
            'user_id' => 1,
            'is_default' => true,
        ])->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);
    }
}
