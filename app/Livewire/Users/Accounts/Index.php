<?php

namespace App\Livewire\Users\Accounts;

use App\Models\Account;
use App\Traits\AccountNumber;
use App\Traits\AccountTypeId;
use App\Traits\AccountUlid;
use App\Traits\BusinessNumber;
use App\Traits\BusinessUlid;
use App\Traits\StatusId;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use AccountUlid, AccountNumber, AccountTypeId, BusinessUlid, BusinessNumber, StatusId;
    public $user;
    public $merchant_account_number;
    public $merchant_account_code;
    public $business_type_id;
    public $business_name;
    public $business_address;
    public $business_place_id;
    public $business_postal_code;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function attachMerchantAccount()
    {
        $this->validate([
            'merchant_account_number' => 'required|string',
            'merchant_account_code' => 'required|string',
        ]);

        $account = Account::where('account_type_id', 2)
            ->where('number', $this->merchant_account_number)
            ->where('code', $this->merchant_account_code)
            ->first();

        if (!$account) {
            $this->addError('merchant_account_number', 'Número de cuenta o código inválido.');
            return;
        }

        $account->update([
            'user_id' => auth()->id(),
        ]);

        session()->flash('message', 'Cuenta de comerciante adjuntada exitosamente.');

        $this->dispatch('close-modal', 'attach-merchant-account-modal');
    }

    public function createMerchantAccount()
    {
        $account = Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => $this->getAccountTypeId('merchant'), // Merchant
            'user_id' => auth()->id(), // Angel F
        ]);
        $account->statuses()->create([
            'status_type_id' => 1,
            'reason' => 'Initial status for default account',
        ]);

        session()->flash('message', 'Cuenta de comerciante creada exitosamente.');
        $this->dispatch('close-modal', 'request-merchant-account-modal');
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

        $account = auth()->user()->accounts()->where('account_type_id', $this->getAccountTypeId('merchant'))->first();

        $business = $account->businesses()->create([
            'ulid' => $this->createBusinessUlid(),
            'number' => $this->createBusinessNumber(),
            'business_type_id' => $this->business_type_id,
            'name' => $this->business_name,
        ]);

        $business->addresses()->create([
            'name' => 'Main Office',
            'place_id' => $this->business_place_id,
            'address' => $this->business_address,
            'postal_code' => $this->business_postal_code,
        ]);

        $business->statuses()->create([
            'status_type_id' => $this->getStatusId('pending'),
            'reason' => 'Initial status for business',
        ]);

        session()->flash('message', 'Comercio creado exitosamente.');
        $this->dispatch('close-modal', 'create-business-modal');
    }

    public function placeholder()
    {
        return view('placeholders.views.users.account-index');
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.index', [
            'accounts' => auth()->user()->accounts()
                ->with(['accountType', 'businesses', 'businesses.status', 'businesses.status.statusType', 'status.statusType'])
                ->whereIn('account_type_id', [1, 2])
                ->orderBy('account_type_id', 'asc')
                ->get(),
            'business_types' => \App\Models\BusinessType::all(),
            'places' => \App\Models\Place::all(),
        ]);
    }
}
