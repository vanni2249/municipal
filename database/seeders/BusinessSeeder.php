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
        $items = [
            [
                'ulid' => $this->createBusinessUlid(),
                'number' => $this->createBusinessNumber(),
                'business_type_id' => 1,
                'name' => 'Acme Corporation',
                'address' => '123 Main St',
                'zip_code' => '12345',
                'place_id' => 1,
            ]
        ];

        foreach ($items as $item) {
            Business::create($item)
                ->statuses()->create([
                    'status_type_id' => 1,
                    'reason' => 'Initial status for business ' . $item['number'],
                ]);
        }

        foreach (Business::all() as $business) {
            $business->accounts()->attach(1,[
                'ulid' => $this->createAccountBusinessUlid(),
                'number' => $this->createAccountBusinessNumber(),
            ]);
        }


        $business = Business::create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => 1,
            'name' => 'Second Business',
            'address' => '789 Tertiary St',
            'zip_code' => '11223',
            'place_id' => 2,
        ]);
        $status = $business->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for second business',
        ]);

        $attach = $business->accounts()->attach(1,[
            'ulid' => $this->createAccountBusinessUlid(),
            'number' => $this->createAccountBusinessNumber(),
        ]);

        // dd($business->accounts->first()->pivot->statuses()->create([
        //     'status_type_id' => 1,
        //     'reason' => 'Initial status for account_business of second business',
        // ]));

        // $accountBusiness = AccountBusiness::where('business_id', $business->id)
        //     ->where('account_id', 1)
        //     ->doesntHave('statuses')
        //     ->first();

        // $accountBusiness->statuses()->create([
        //     'status_type_id' => 1,
        //     'reason' => 'Initial status for account_business of second business',
        // ]);    

        //     dd($accountBusiness->status->statusType->name);

    }
}
