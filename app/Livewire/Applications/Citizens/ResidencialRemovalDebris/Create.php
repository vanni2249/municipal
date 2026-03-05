<?php

namespace App\Livewire\Applications\Citizens\ResidencialRemovalDebris;

use App\Models\AppCitizenResidencialRemovalDebris;
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

    public $description;

    public function store()
    {
        $this->validate([
            'address_id' => 'required|exists:addresses,id',
            'description' => 'required|string',
        ]);

        // Create an AppCitizenResidencialRemovalDebris
        $appCitizenResidencialRemovalDebris = AppCitizenResidencialRemovalDebris::create([
            'address_id' => $this->address_id,
            'description' => $this->description,
        ]);

        $app = $appCitizenResidencialRemovalDebris->applications()->create([
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
        return view('livewire.applications.citizens.residencial-removal-debris.create', [
            'addresses' => $this->account->addresses,
        ]);
    }
}
