<?php

namespace Database\Seeders;

use App\Models\Merge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MergeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merge::create([
            'business_id' => 1,
            'account_id' => 3,
            'merge_code' => 'MERGE12345',
        ])->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for merge record',
        ]);
    }
}
