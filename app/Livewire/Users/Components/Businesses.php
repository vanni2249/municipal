<?php

namespace App\Livewire\Users\Components;

use App\Traits\AccountTypeId;
use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use App\Traits\StatusTypeId;
use Livewire\Attributes\On;
use Livewire\Component;

class Businesses extends Component
{
    use BusinessUlid, BusinessNumber, AccountTypeId, StatusTypeId;
    public $user;
    public $merchant;
    public $businesses;
    public $business_type_id;
    public $business_name;
    public $business_address;
    public $business_place_id;
    public $business_postal_code;

    public function mount($user, $businesses)
    {
        $this->user = $user;
        $this->businesses = $businesses;
        $this->merchant = $user->accounts()->where('account_type_id', $this->getAccountTypeId('merchant'))->first();
    }
    public function createBusiness()
    {
        $this->validate([
            'business_type_id' => 'required|integer|exists:business_types,id',
            'business_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:255',
            'business_place_id' => 'required|integer|exists:places,id',
            'business_postal_code' => 'required|string|max:20',

        ]);

        $account = $this->merchant;

        // check if merchant account exists and name isst already taken
        if (!$account) {
            $this->addError('merchant_account', 'No tienes una cuenta de comerciante para crear un negocio.');
            return;
        }
        if ($account->businesses()->where('name', $this->business_name)->exists()) {
            $this->addError('business_name', 'Ya tienes un negocio con ese nombre. Por favor elige otro nombre.');
            return;
        }

        $business = $account->businesses()->create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => $this->business_type_id,
            'name' => $this->business_name,
        ]);

        $business->address()->create([
            'name' => 'Main Office',
            'place_id' => $this->business_place_id,
            'address' => $this->business_address,
            'postal_code' => $this->business_postal_code,
        ]);

        $business->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('pending'),
            'reason' => 'Initial status for business',
        ]);

        session()->flash('message', 'Comercio creado exitosamente.');
        $this->dispatch('close-modal', 'create-business-modal');
        $this->refreshBusinesses();
    }

    #[On(['account-attached'])]
    public function refreshBusinesses()
    {
        $this->businesses = $this->merchant->businesses ?? [];
    }


    public function render()
    {
        return view('livewire.users.components.businesses', [
            'businesses' => $this->businesses,
            'business_types' => \App\Models\BusinessType::all(),
            'places' => \App\Models\Place::all(),
        ]);
    }
}
