<?php

namespace App\Livewire\Applications\Citizens\PropertyRent;

use App\Models\AppCitizenPropertyRent;
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
    public $rent_date;
    public $description;

    public function store()
    {
        $this->validate([
            'property_id' => 'required|exists:properties,id',
            'rent_date' => 'required|date',
            'description' => 'required|string',
        ]);

        // Create an AppCitizenPropertyRent
        $appCitizenPropertyRent = AppCitizenPropertyRent::create([
            'property_id' => $this->property_id,
            'rent_date' => $this->rent_date,
            'description' => $this->description,
        ]);

        $app = $appCitizenPropertyRent->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => $this->account->id,
            'number' => $this->createApplicationNumber(),
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $this->redirect(route(
            'admin.citizens.applications.show',
            [
                'department' => request()->department(),
                'citizen' => $this->account->ulid,
                'application' => $app->ulid
            ]
        ), navigate: true);

    }

    public function render()
    {
        return view('livewire.applications.citizens.property-rent.create', [
            'properties' => Property::all(),
        ]);
    }
}
