<?php

namespace App\Livewire\Applications\Citizens\ReportPropertyDamage;

use App\Models\AppCitizenReportPropertyDamage;
use App\Models\Property;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use StatusTypeId, ApplicationUlid, ApplicationNumber;
    public $account;
    public $service;

    public $property_id;

    public $description;

    public function store()
    {
        $this->validate([
            'property_id' => 'required|exists:properties,id',
            'description' => 'required|string',
        ]);

         // Create an AppCitizenReportPropertyDamage
        $appCitizenReportPropertyDamage = AppCitizenReportPropertyDamage::create([
            'property_id' => $this->property_id,
            'description' => $this->description,
        ]);
        
        $app = $appCitizenReportPropertyDamage->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => $this->account->id,
            'number' => $this->createApplicationNumber(),
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $this->reset(['property_id', 'description']);

        $this->dispatch('close-modal', 'create-citizen-application-modal');

        $this->dispatch('application-created');
    }
    public function render()
    {
        return view('livewire.applications.citizens.report-property-damage.create', [
            'properties' => Property::all(),
        ]);
    }
}
