<?php

namespace App\Livewire\Applications\Citizens\PropertyUse;

use App\Models\AppCitizenPropertyUse;
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
    public $use_date;
    public $description;

    public function store()
    {
        $this->validate([
            'property_id' => 'required|exists:properties,id',
            'use_date' => 'required|date',
            'description' => 'required|string',
        ]);

         // Create an AppCitizenPropertyUse
        $appCitizenPropertyUse = AppCitizenPropertyUse::create([
            'property_id' => $this->property_id,
            'use_date' => $this->use_date,
            'description' => $this->description,
        ]);
        
        $app = $appCitizenPropertyUse->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => $this->account->id,
            'number' => $this->createApplicationNumber(),
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $this->reset(['property_id', 'use_date', 'description']);

        $this->dispatch('close-modal', 'create-citizen-application-modal');

        $this->dispatch('application-created');

    }

    public function render()
    {
        return view('livewire.applications.citizens.property-use.create', [
            'properties' => Property::all(),
        ]);
    }
}
