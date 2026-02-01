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

        // Business 1 Giovanni
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Acme Corporation',
            'account_id' => 4,
        ]);

        $business->addresses()->create([
            'name' => 'Headquarters',
            'place_id' => 1,
            'address' => '123 Main St',
            'postal_code' => '12345',
        ]);

        $business->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for business',
        ]);
        $business->defaults()->create([
            'user_id' => 1,
        ]);


        // Business 2 Giovanni
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Second Business',
            'account_id' => 4,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => 2,
            'address' => '456 Another St',
            'postal_code' => '67890',
        ]);

        $business->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for second business',
        ]);

        // Business 3 Angel F
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Third Business',
            'account_id' => 5,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => 2,
            'address' => '456 Another St',
            'postal_code' => '67890',
        ]);

        $business->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for third business',
        ]);

        // Business 4 Angel F
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Third Business',
            'account_id' => 5,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => 2,
            'address' => '456 Another St',
            'postal_code' => '67890',
        ]);

        $business->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for third business',
        ]);

        // Business 4 Angel M
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Third Business',
            'account_id' => 6,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => 2,
            'address' => '456 Another St',
            'postal_code' => '67890',
        ]);

        $business->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for third business',
        ]);

        // Business 5 Angel M
        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Third Business',
            'account_id' => 6,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => 2,
            'address' => '456 Another St',
            'postal_code' => '67890',
        ]);

        $business->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for third business',
        ]);

    }
}
