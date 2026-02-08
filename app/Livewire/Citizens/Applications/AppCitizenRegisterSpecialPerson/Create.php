<?php

namespace App\Livewire\Citizens\Applications\AppCitizenRegisterSpecialPerson;

use App\Models\AppCitizenRegisterSpecialPerson;
use App\Models\Place;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, ApplicationNumber, StatusTypeId;
    public $service;

    public $account;
    public $name;
    public $lastname;
    public $birth_date;
    public $is_disabled = false;
    public $disability_type;
    public $is_veteran = false;
    public $relationship;
    public $contact_person;
    public $contact_phone;
    public $address;
    public $place_id;
    public $zip_code;

    public function mount($service, $account)
    {
        $this->service = $service;
        $this->account = $account;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'is_disabled' => 'required|boolean',
            'disability_type' => 'nullable|string|max:255',
            'is_veteran' => 'required|boolean',
            'relationship' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'place_id' => 'required|string|max:255',
            'zip_code' => 'required|string|max:20',
        ]);

        $appCitizenRegisterSpecialPerson = AppCitizenRegisterSpecialPerson::create([
            'name' => $this->name,
            'last_name' => $this->lastname,
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
        ]);

        $app = $appCitizenRegisterSpecialPerson->applications()->create([
            'ulid' => $this->createApplicationUlid(),
            'number' => $this->createApplicationNumber(),
            'account_id' => $this->account->id,
            'service_id' => $this->service->id,
        ]);

        $app->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('unverified'),
        ]);


        // Logic to store the special person registration application goes here

        session()->flash('message', 'Application submitted successfully.');
        return $this->redirect(route('citizens.applications.show', $app->ulid), navigate: true);
    }
    public function render()
    {
        return view('livewire.citizens.applications.app-citizen-register-special-person.create', [
            'places' => Place::all(),
        ]);
    }
}
