<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Traits\AccountBusinessNumber;
use App\Traits\AccountBusinessUlid;
use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    use BusinessUlid, BusinessNumber, AccountBusinessUlid, AccountBusinessNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Business 1
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Acme Corporation',
            'account_id' => 1,
        ]);

        $business->addresses()->create([
            'name' => 'Headquarters',
            'place_id' => 1,
            'address' => '123 Main St',
            'postal_code' => '12345',
        ]);

        $business->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for business',
        ]);

                // $business->accounts()->attach(1, [
                //     'ulid' => $this->createAccountBusinessUlid(),
                //     'number' => $this->createAccountBusinessNumber(),
                // ]);

        // Business 2
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Second Business',
            'account_id' => 1,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => 2,
            'address' => '456 Another St',
            'postal_code' => '67890',
        ]);

        $business->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for second business',
        ]);

        // $business->accounts()->attach(1, [
        //     'ulid' => $this->createAccountBusinessUlid(),
        //     'number' => $this->createAccountBusinessNumber(),
        // ]);
    }
}
