<?php

namespace App\Livewire\Businesses\Applications\AppBusinessConstructionPermit;

use App\Models\AppBusinessConstructionPermit;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\InspectionNumber;
use App\Traits\InspectionTypeId;
use App\Traits\InspectionUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, ApplicationNumber, StatusTypeId, InspectionNumber, InspectionUlid, InspectionTypeId;
    public $service;
    public $business;
    public $project_description;
    public $contractor_name;
    public $contractor_license_number;
    public function mount($service, $business)
    {
        $this->service = $service;
        $this->business = $business;
    }

    public function store()
    {
        $this->validate([
            'project_description' => 'required|string',
            'contractor_name' => 'required|string',
            'contractor_license_number' => 'required|string',
        ]);

        $appBusinessConstructionPermit = AppBusinessConstructionPermit::create([
            'project_description' => $this->project_description,
            'contractor_name' => $this->contractor_name,
            'contractor_license_number' => $this->contractor_license_number,
        ]);

        $app = $appBusinessConstructionPermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'business_id' => $this->business->id,
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $app->inspections()->create([
            'ulid' => $this->createInspectionUlid(),
            'number' => $this->createInspectionNumber(),
            'inspection_type_id' => $this->getInspectionTypeId('business-construction-permit-inspection'),
        ])->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);


        // Logic to store the application goes here

        session()->flash('message', 'Application submitted successfully.');

        return $this->redirect(route('businesses.applications.show', $app->ulid), navigate: true);


    }

    public function render()
    {
        return view('livewire.businesses.applications.app-business-construction-permit.create');
    }
}
