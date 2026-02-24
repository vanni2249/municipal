<?php

namespace App\Livewire\Applications\Citizens\ResidencialConstructionPermit;

use App\Models\AppCitizenResidencialConstructionPermit;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use StatusTypeId, ApplicationUlid, ApplicationNumber;
    public $account;
    public $service;
    public $address_id;
    public $owner_name;
    public $contractor_name;
    public $description;

    public function store()
    {
        $this->validate([
            'address_id' => 'required|exists:addresses,id',
            'owner_name' => 'required|string',
            'contractor_name' => 'required|string',
            'description' => 'required|string',
        ]);

         // Create an AppCitizenResidencialConstructionPermit
        $appCitizenResidencialConstructionPermit = AppCitizenResidencialConstructionPermit::create([
            'address_id' => $this->address_id,
            'owner_name' => $this->owner_name,
            'contractor_name' => $this->contractor_name,
            'description' => $this->description,
        ]);
        
        $app = $appCitizenResidencialConstructionPermit->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => $this->account->id,
            'number' => $this->createApplicationNumber(),
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $this->reset(['address_id', 'owner_name', 'contractor_name', 'description']);

        $this->dispatch('close-modal', 'create-citizen-application-modal');

        $this->dispatch('application-created');
    }
    public function render()
    {
        return view('livewire.applications.citizens.residencial-construction-permit.create', [
            'addresses' => $this->account->addresses,
        ]);
    }
}
