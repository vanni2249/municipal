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
use App\Traits\InspectionNumber;
use App\Traits\InspectionUlid;
use App\Traits\PermitNumber;
use App\Traits\PermitUlid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ApplicationSeeder extends Seeder
{
    use ApplicationUlid, ApplicationNumber, PermitNumber, PermitUlid, InspectionUlid, InspectionNumber;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an AppCitizenPropertyUse
        $appCitizenPropertyUse = AppCitizenPropertyUse::create([
            'property_id' => 1,
            'use_date' => now(),
            'description' => 'Park one Use',
        ]);
        
        $app = $appCitizenPropertyUse->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => rand(1, 3),
            'number' => $this->createApplicationNumber(),
            'service_id' => 1,
        ]);

        $app->transactions()->create([
            'ulid' => $this->createInspectionUlid(),
            'number' => $this->createInspectionNumber(),
            'status' => 'success',
            'amount' => 100.00,
            'transaction_method_type_id' => 1, // Assuming 1 corresponds to a valid transaction method type
            'reference' => 'Initial payment for application',
        ]);

        $app->permit()->create([
            'ulid' => $this->createPermitUlid(),
            'number' => $this->createPermitNumber(),
        ]);
        
        $app->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        $app->userLogs()->create([
            'user_id' => 1,
            'account_id' => rand(1, 3),
            'log_type_id' => 1, // Assuming 1 corresponds to a valid log user type
        ]);

        // Create another AppCitizenPropertyRental
        AppCitizenPropertyRent::create([
            'property_id' => 2,
            'rent_date' => now(),
            'description' => 'Building Rent',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => rand(1, 3),
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
            'account_id' => rand(1, 3),
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
            'account_id' => rand(1, 3),
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
            'account_id' => rand(1, 3),
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
        $app = $citizenConstPermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => rand(1, 3),
            'service_id' => 6,
        ]);
        $app->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        $app->inspections()->create([
            'ulid' => $this->createInspectionUlid(),
            'number' => $this->createInspectionNumber(),
            'inspection_type_id' => 1, // Assuming 1 corresponds to 'building-inspection'
        ]);
        
        $app->permit()->create([
            'ulid' => $this->createPermitUlid(),
            'number' => $this->createPermitNumber(),
        ]);

        $app->adminLogs()->create([
            'admin_id' => 1,
            'log_type_id' => 1, // Assuming 1 corresponds to a valid log user type
        ]);

        // Create AppBusinessRemoveTrash application
        AppBusinessRemoveTrash::create([
            'business_id' => 1,
            'description' => 'Business Trash Removal Service',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 7,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessRemoveDebris application
        AppBusinessRemoveDebris::create([
            'business_id' => rand(1, 3),
            'description' => 'Business Debris Removal Service',
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 8,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        // Create AppBusinessConstructionPermit application
        $businessConstPermit = AppBusinessConstructionPermit::create([
            'business_id' => rand(1, 3),
            'permit_number' => 'BUS-CP-001',
            'started_at' => now()->addYear(),
            'ended_at' => now()->addYears(2),
            'project_description' => 'Construction of new office building',
            'contractor_name' => 'Top Construction LLC',
            'contractor_license_number' => 'LIC-987654',
        ]);
        $app = $businessConstPermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 9,
        ]);
        $app->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        $app->permit()->create([
            'ulid' => $this->createPermitUlid(),
            'number' => $this->createPermitNumber(),
        ]);

        // Create AppBusinessUsePermit application
        $appBusinessUsePermit = AppBusinessUsePermit::create([
            'business_id' => rand(1, 3),
            'permit_number' => 'BUS-UP-001',
            'started_at' => now(),
            'ended_at' => now()->addYears(1),
        ]);
        $app = $appBusinessUsePermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 10,
        ]);
        $app->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);
         $app->permit()->create([
            'ulid' => $this->createPermitUlid(),
            'number' => $this->createPermitNumber(),
        ]);

        // Create AppBusinessTemporaryPatent application
        $appBusinessTemporaryPatent = AppBusinessTemporaryPatent::create([
            'business_id' => rand(1, 3),
            'started_at' => now(),
            'ended_at' => now()->addMonths(3),
            'amount' => 500.00,
            'fee' => 50.00,
        ]);
        $app = $appBusinessTemporaryPatent->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 12,
        ]);
        $app->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);
        $app->patent()->create([
            'ulid' => $this->createPermitUlid(),
            'number' => $this->createPermitNumber(),
        ]);

        // Create AppBusinessRenewPatent application
        $appBusinessRenewPatent = AppBusinessRenewPatent::create([
            'business_id' => rand(1, 3),
            'sales_amount' => 10000.00,
            'started_at' => now(),
            'ended_at' => now()->addYear(),
            'amount' => 200.00,
            'fee' => 20.00,
        ]);
        $app = $appBusinessRenewPatent->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 11,
        ]);
        $app->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);

        $app->patent()->create([
            'ulid' => $this->createPermitUlid(),
            'number' => $this->createPermitNumber(),
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
            'business_id' => rand(1, 3),
            'tax_period_id' => 1,
            'amount_reported' => 15000.00,
            'tax_due' => 750.00,
        ])->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => rand(1, 3),
            'service_id' => 13,
        ])->statuses()->create([
            'status_type_id' => 1,
            'changed_by' => 1,
            'reason' => 'Initial status',
        ]);
    }
}
