<?php

namespace App\Livewire\Applications\Businesses\RemoveDebris;

use App\Models\AppBusinessRemoveDebris;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, ApplicationNumber, StatusTypeId;
    public $business;
    public $service;
    public $description;

    public function mount($business)
    {
        $this->business = $business;
    }

    public function store()
    {
        $this->validate([
            'description' => 'required|string|max:255',
            'business' => 'required',
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

       $this->redirect(route(
            'admin.merchants.businesses.applications.show',
            [
                'department' => request()->department(),
                'merchant' => $this->business->account->ulid,
                'business' => $this->business->ulid,
                'application' => $app->ulid
            ]
        ), navigate: true);
    }
    public function render()
    {
        return view('livewire.applications.businesses.remove-debris.create');
    }
}
