<?php

namespace Database\Seeders;

use App\Models\AppBusinessConstructionPermit;
use App\Models\AppBusinessRemoveDebris;
use App\Models\AppBusinessRemoveTrash;
use App\Models\AppBusinessRenewPatent;
use App\Models\AppBusinessReportTax;
use App\Models\AppBusinessReportTaxPeriod;
use App\Models\AppBusinessTemporaryPatent;
use App\Models\AppBusinessUsePermit;
use App\Models\AppCitizenPropertyRent;
use App\Models\AppCitizenPropertyUse;
use App\Models\AppCitizenRegisterSpecialPerson;
use App\Models\AppCitizenReportPropertyDamage;
use App\Models\AppCitizenResidencialConstructionPermit;
use App\Models\AppCitizenResidencialRemovalDebris;
use App\Models\Application;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ApplicationSeeder extends Seeder
{
    use ApplicationUlid, ApplicationNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an AppCitizenPropertyUse
        AppCitizenPropertyUse::create([
            'property_id' => 1,
            'use_date' => now(),
            'description' => 'Park one Use',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => 1,
            'number' => $this->createApplicationNumber(),
            'service_id' => 1,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create another AppCitizenPropertyRental
        AppCitizenPropertyRent::create([
            'property_id' => 2,
            'rent_date' => now(),
            'description' => 'Building Rent',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 2,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        //Create AppCitizenResidencialRemoveDebris application
        AppCitizenResidencialRemovalDebris::create([
            'address_id' => 1,
            'description' => 'Residential Debris Removal',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 3,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        //Create AppCitizenReportPropertyDamage application
        AppCitizenReportPropertyDamage::create([
            'property' => '123 Main St',
            'description' => 'Report Property Damage',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 4,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppCitizenRegisterSpecialPerson application
        AppCitizenRegisterSpecialPerson::create([
            'name' => 'John',
            'last_name' => 'Doe',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 5,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        //Create AppCitizenResidencialConstructionPermit application
        $citizenConstPermit = AppCitizenResidencialConstructionPermit::create([
            'address_id' => 1,
            'owner_name' => 'Alice Smith',
            'description' => 'Building a new residential home',
            'expiry_date' => now()->addYear(),
            'contractor_name' => 'Best Builders Inc.',
        ]);
        $application = $citizenConstPermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 6,
        ]);
        $application->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessRemoveTrash application
        AppBusinessRemoveTrash::create([
            'business_id' => 1,
            'description' => 'Business Trash Removal Service',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 7,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessRemoveDebris application
        AppBusinessRemoveDebris::create([
            'business_id' => 2,
            'description' => 'Business Debris Removal Service',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 8,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessConstructionPermit application
        $businessConstPermit = AppBusinessConstructionPermit::create([
            'business_id' => 1,
            'permit_number' => 'BUS-CP-001',
            'started_at' => now()->addYear(),
            'ended_at' => now()->addYears(2),
            'project_description' => 'Construction of new office building',
            'contractor_name' => 'Top Construction LLC',
            'contractor_license_number' => 'LIC-987654',
        ]);
        $application = $businessConstPermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 9,
        ]);
        $application->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessUsePermit application
        AppBusinessUsePermit::create([
            'business_id' => 1,
            'permit_number' => 'BUS-UP-001',
            'started_at' => now(),
            'ended_at' => now()->addYears(1),
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 10,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessTemporaryPatent application
        AppBusinessTemporaryPatent::create([
            'business_id' => 2,
            'started_at' => now(),
            'ended_at' => now()->addMonths(3),
            'amount' => 500.00,
            'fee' => 50.00,
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 12,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessRenewPatent application
        AppBusinessRenewPatent::create([
            'business_id' => 2,
            'sales_amount' => 10000.00,
            'started_at' => now(),
            'ended_at' => now()->addYear(),
            'amount' => 200.00,
            'fee' => 20.00,
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 11,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessReportTaxPeriods
        AppBusinessReportTaxPeriod::create([
            'year' => 2023,
            'quarter' => 'Q1',
            'start_date' => '2023-01-01',
            'end_date' => '2023-03-31',
        ]);
        // (This is just to ensure the periods exist; applications will reference these periods)

        // Create AppBusinessReportTaxesIvu application
        AppBusinessReportTax::create([
            'business_id' => 1,
            'tax_period_id' => 1,
            'amount_reported' => 15000.00,
            'tax_due' => 750.00,
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => 1,
            'service_id' => 13,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);
    }
}
