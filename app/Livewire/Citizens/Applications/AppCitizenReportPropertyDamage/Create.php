<?php

namespace App\Livewire\Citizens\Applications\AppCitizenReportPropertyDamage;

use App\Models\AppCitizenReportPropertyDamage;
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
            'description' => 'required|string|min:10|max:1000',
        ]);


        $appCitizenReportPropertyDamage = AppCitizenReportPropertyDamage::create([
            'property_id' => $this->property_id,
            'description' => $this->description,
        ]);

        $app = $appCitizenReportPropertyDamage->applications()->create([
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

        return $this->redirect(route('citizens.applications.show', $app->ulid), navigate: true);
    }
    public function render()
    {
        return view('livewire.citizens.applications.app-citizen-report-property-damage.create', [
            'properties' => Property::get(),
        ]);
    }
}
