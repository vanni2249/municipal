<?php

namespace App\Livewire\Businesses\Applications\AppBusinessRemoveDebris;

use App\Models\AppBusinessRemoveDebris;
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
    public $description;

    public function mount($service, $business)
    {
        $this->service = $service;
        $this->business = $business;

    }

    public function store()
    {
        $this->validate([
            'description' => 'required|string|min:10|max:1000',
        ]);
        $appBusinessRemoveDebris = AppBusinessRemoveDebris::create([
            'description' => $this->description,
        ]);

        $app = $appBusinessRemoveDebris->applications()->create([
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
            'inspection_type_id' => $this->getInspectionTypeId('debris-inspection'),
        ])->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
            'reason' => 'Initial status',
        ]);


        // Logic to store the application goes here

        session()->flash('message', 'Application submitted successfully.');

        return $this->redirect(route('businesses.applications.show', $app->ulid), navigate: true);

    }

    public function render()
    {
        return view('livewire.businesses.applications.app-business-remove-debris.create', [
            'addresses' => $this->business->addresses,
        ]);
    }
}
