<?php

namespace App\Livewire\Applications\Citizens\RegisterSpecialPerson;

use App\Models\AppCitizenRegisterSpecialPerson;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use StatusTypeId, ApplicationUlid, ApplicationNumber;
    public $account;
    public $service;
    public $name;
    public $last_name;
    public $birth_date;
    public $is_disabled;
    public $disability_type;
    public $is_veteran;
    public $relationship;
    public $contact_person;
    public $contact_phone;
    public $address;
    public $place_id;
    public $zip_code;
    public $remarks;
    public $is_active = true;

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'birth_date' => 'required|date',
            'is_disabled' => 'required|boolean',
            'disability_type' => 'nullable|string',
            'is_veteran' => 'required|boolean',
            'contact_person' => 'required|string',
            'relationship' => 'nullable|string',
            'contact_phone' => 'nullable|string',
            'address' => 'required|string',
            'place_id' => 'required|exists:places,id',
            'zip_code' => 'required|string',
            'remarks' => 'nullable|string',
            'is_active' => 'required|boolean',
        ]);

         // Create an AppCitizenRegisterSpecialPerson
        $appCitizenRegisterSpecialPerson = AppCitizenRegisterSpecialPerson::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'is_disabled' => $this->is_disabled,
            'disability_type' => $this->disability_type,
            'is_veteran' => $this->is_veteran,
            'relationship' => $this->relationship,
            'contact_person' => $this->contact_person,
            'contact_phone' => $this->contact_phone,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'zip_code' => $this->zip_code,
            'remarks' => $this->remarks,
            'is_active' => $this->is_active,
        ]);
        
        $app = $appCitizenRegisterSpecialPerson->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'account_id' => $this->account->id,
            'number' => $this->createApplicationNumber(),
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
        ]);

        $this->reset(['name', 'last_name', 'birth_date', 'is_disabled', 'disability_type', 'is_veteran', 'relationship', 'contact_person', 'contact_phone', 'address', 'place_id', 'zip_code', 'remarks', 'is_active']);

        $this->dispatch('close-modal', 'create-citizen-application-modal');

        $this->dispatch('application-created');
    }
    public function render()
    {
        return view('livewire.applications.citizens.register-special-person.create', [
            'places' => \App\Models\Place::orderBy('name')->get(),
        ]);
    }
}
