<?php

namespace App\Livewire\Admin\Components;

use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class BusinessCreate extends Component
{
    use BusinessUlid, BusinessNumber, StatusTypeId;
    public $account;
    public $name;
    public $business_type_id;
    public $address;
    public $place_id;
    public $postal_code;

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'business_type_id' => 'required|exists:business_types,id',
            'address' => 'required|string|max:255',
            'place_id' => 'required|exists:places,id',
            'postal_code' => 'required|string|max:10',
        ]);

        $business = $this->account->businesses()->create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'name' => $this->name,
            'business_type_id' => $this->business_type_id,
        ]);

        $address =$business->address()->create([
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
        ]);

        $business->status()->create([
            'status_type_id' => $this->getStatusTypeId('active'),
        ]);

        return $this->redirect(route('admin.merchants.businesses.show', [
            'department' => request()->department(),
            'merchant' => $business->account->ulid,
            'business' => $business->ulid,
        ]), navigate: true);
    }
    public function render()
    {
        return view('livewire.admin.components.business-create', [
            'businessTypes' => \App\Models\BusinessType::all(),
            'places' => \App\Models\Place::all(),
        ]);
    }
}
