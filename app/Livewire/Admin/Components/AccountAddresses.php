<?php

namespace App\Livewire\Admin\Components;

use App\Models\Place;
use Livewire\Attributes\On;
use Livewire\Component;

class AccountAddresses extends Component
{
    public $account;
    public $addresses;
    public $name;
    public $address;
    public $postal_code;
    public $place_id;
    public $addressId;


    public function mount($account)
    {
        $this->account = $account;
        $this->addresses = $account->addresses()->with('place')->get();
    }

    public function save()
    {
        if ($this->addressId) {
            $this->update($this->addressId);
        } else {
            $this->store();
        }
    }

    public function create()
    {
        $this->reset(['name', 'address', 'postal_code', 'place_id', 'addressId']);
        $this->dispatch('open-modal', 'address-modal');
    }

    public function store($addressId = null)
    {
        if ($addressId) {
            $this->update($addressId);
            return;
        }
        $this->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'place_id' => 'required|exists:places,id',
        ]);

        $this->account->addresses()->create([
            'name' => $this->name,
            'address' => $this->address,
            'postal_code' => $this->postal_code,
            'place_id' => $this->place_id,
        ]);

        // Reset form fields
        $this->reset(['name', 'address', 'postal_code', 'place_id']);
        $this->dispatch('address-created');
        $this->dispatch('close-modal', 'address-modal');
    }

    public function edit($addressId)
    {
        $this->addressId = $addressId;
        $address = $this->account->addresses()->findOrFail($addressId);
        $this->name = $address->name;
        $this->address = $address->address;
        $this->postal_code = $address->postal_code;
        $this->place_id = $address->place_id;

        $this->dispatch('open-modal', 'address-modal');
    }

    public function update($addressId)
    {

        // Similar to save but for updating an existing address
        $this->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'place_id' => 'required|exists:places,id',
        ]);

        $address = $this->account->addresses()->findOrFail($addressId);
        $address->update([
            'name' => $this->name,
            'address' => $this->address,
            'postal_code' => $this->postal_code,
            'place_id' => $this->place_id,
        ]);

        // Reset form fields
        $this->reset(['name', 'address', 'postal_code', 'place_id', 'addressId']);
        $this->dispatch('address-updated');
        $this->dispatch('close-modal', 'address-modal');
    }

    #[On([  'address-created', 'address-updated'])]
    public function render()
    {
        return view('livewire.admin.components.account-addresses',[
            'places' => Place::all()
        ]);
    }
}
