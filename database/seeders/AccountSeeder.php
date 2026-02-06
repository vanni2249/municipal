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
            'account_type_id' => 1, // Citizen
            'user_id' => 1, // Giovanni
        ]);

        $accountFirst->addresses()->create([
            'name' => 'Default Account Address',
            'place_id' => 1,
            'address' => '123 Main St, Hometown',
            'postal_code' => '12345',
        ]);

        $accountFirst->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        $accountFirst->defaults()->create([
            'user_id' => 1,
        ]);

        // 2Create citizen account Angel F
        $accountSecond = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1, // Citizen
            'user_id' => 2, // Angel F
        ]);
        $accountSecond->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        $accountSecond->defaults()->create([
            'user_id' => 2,
        ]);

        //3 Create citizen account Angel M
        $accountThird = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1, // Citizen
            'user_id' => 3, // Angel M
        ]);
        $accountThird->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);
        $accountThird->defaults()->create([
            'user_id' => 3,
        ]);

        // 4Create merchant account Giovanni
        $accountFourth = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2, // Merchant
            'user_id' => 1, // Giovanni
        ]);
        $accountFourth->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 5Create merchant account Angel F
        $accountFifth = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2, // Merchant
            'user_id' => 2, // Angel F
        ]);
        $accountFifth->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 6Create merchant account Angel M
        $accountSixth = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 2, // Merchant
            'user_id' => 3, // Angel M
        ]);
        $accountSixth->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 7Create accountant account Giovanni
        $accountSeventh = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 3, // Accountant
            'user_id' => 1, // Giovanni
        ]);
        $accountSeventh->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 8Create citizen account not linked to user
        $accountEighth = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => 1, // Citizen
            'name' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@example.com',
        ]);
        $accountEighth->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);

        // 9Create merchant account not linked to user
        $accountNinth = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'code' => 'code1234',
            'account_type_id' => 2, // Merchant
            'name' => 'Jose',
            'lastname' => 'Contreras',
            'email' => 'jose.doe@example.com',
        ]);
        $accountNinth->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for default account',
        ]);
    }
}
