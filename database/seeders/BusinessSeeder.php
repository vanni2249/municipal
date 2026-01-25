<?php

namespace Database\Seeders;

use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    use BusinessUlid, BusinessNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'business_type_id' => 1,
                'name' => 'Acme Corporation',
                'address' => '123 Main St',
                'zip_code' => '12345',
                'place_id' => 1,
                'account_id' => 1,
            ]
        ];

        foreach ($items as $item) {
            \App\Models\Business::create($item)->statuses()->create([
                'business_status_type_id' => 1,
                'reason' => 'Initial status set to active.',
            ]);
        }
    }
}
