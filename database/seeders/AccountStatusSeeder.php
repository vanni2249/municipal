<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'account_id' => 1,
                'account_status_type_id' => 2, // Assuming 'active' status
                'changed_by' => null,
                'reason' => 'Initial account status set to active.',
            ],
            [
                'account_id' => 2,
                'account_status_type_id' => 1, // Assuming 'inactive' status
                'changed_by' => null,
                'reason' => 'Initial account status set to inactive.',
            ]
        ];

        foreach ($items as $item) {
            \App\Models\AccountStatus::create($item);
        }
    }
}
