<?php

namespace App\Livewire\Citizens\Applications\AppCitizenResidencialConstructionPermit;

use App\Models\AppCitizenResidencialConstructionPermit;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, ApplicationNumber, StatusTypeId;
    public $service;

    public $account;

    public $owner_name;

    public $address_id;

    public $description;

    public $contractor_name;

    public function mount($service, $account)
    {
        $this->service = $service;
        $this->account = $account;
    }

     public function store()
    {
        $this->validate([
            'address_id' => 'required|exists:addresses,id',
            'description' => 'required|string|min:10|max:1000',
            'owner_name' => 'required|string|max:255',
            'contractor_name' => 'required|string|max:255',
        ]);


       $appCitizenResidencialConstructionPermit = AppCitizenResidencialConstructionPermit::create([
            'address_id' => $this->address_id,
            'description' => $this->description,
            'owner_name' => $this->owner_name,
            'contractor_name' => $this->contractor_name,
        ]);

        $app = $appCitizenResidencialConstructionPermit->applications()->create([
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
        return view('livewire.citizens.applications.app-citizen-residencial-construction-permit.create',[
            'addresses' => auth()->user()->accounts()->where('ulid', session('data.account_ulid'))->first()->addresses,
        ]);
    }
}
