<?php

namespace App\Livewire\Citizens\Applications\AppCitizenPropertyUse;

use App\Models\AppCitizenPropertyUse;
use App\Models\Property;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, ApplicationNumber, StatusTypeId;
    public $service;

    public $account;

    public $property_id;

    public $date_at;

    public $description;

    public function mount($service, $account)
    {
        $this->service = $service;
        $this->account = $account;
    }

    public function store()
    {
        $this->validate([
            'property_id' => 'required|exists:properties,id',
            'date_at' => 'required|date',
            'description' => 'required|string|min:10|max:1000',
        ]);


       $appCitizenPropertyUse = AppCitizenPropertyUse::create([
            'property_id' => $this->property_id,
            'use_date' => $this->date_at,
            'description' => $this->description,
        ]);

        $app = $appCitizenPropertyUse->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => $this->account->id,
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);


        // Logic to store the application goes here

        session()->flash('message', 'Application submitted successfully.');

        return redirect()->route('citizens.applications.show', ['application' => $app->ulid]);
    }

    public function render()
    {
        return view('livewire.citizens.applications.app-citizen-property-use.create', [
            'properties' => Property::all(),
        ]);
    }
}
