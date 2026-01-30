<?php

namespace Database\Seeders;

use App\Models\Merge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MergeSeeder extends Seeder
{
    use \App\Traits\MergeUlid;
    use \App\Traits\MergeNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merge = Merge::create([
            'ulid' => $this->createMergeUlid(),
            'number' => $this->createMergeNumber(),
            'code' => 'MERGE12345',
            'account_accountant_id' => 3,
            'account_merchant_id' => 2,
            'business_id' => 1,
        ]);

        $merge->statuses()->create([
            'status_type_id' => 2,
            'reason' => 'Initial status for merge record',
        ]);

        $merge = Merge::create([
            'ulid' => $this->createMergeUlid(),
            'number' => $this->createMergeNumber(),
            'code' => 'MERGE12345',
            'account_accountant_id' => 3,
            'account_merchant_id' => 2,
            'business_id' => 2,
        ]);

        $merge->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for merge record',
        ]);

        $merge = Merge::create([
            'ulid' => $this->createMergeUlid(),
            'number' => $this->createMergeNumber(),
            'code' => 'MERGE12345',
            'account_accountant_id' => 3,
            'account_merchant_id' => 4,
            'business_id' => 3,
        ]);

        $merge->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for merge record',
        ]);
    }
}
