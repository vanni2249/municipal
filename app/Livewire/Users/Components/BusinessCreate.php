<?php

namespace App\Livewire\Users\Components;

use App\Models\Account;
use App\Traits\AccountNumber;
use App\Traits\AccountTypeId;
use App\Traits\AccountUlid;
use Livewire\Component;

class BusinessCreate extends Component
{
    use AccountUlid, AccountNumber, AccountTypeId;
    public $merchant_account;
    public $user;

    public function mount($merchant_account, $user)
    {
        $this->merchant_account = $merchant_account;
        $this->user = $user;
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
        $this->dispatch('account-created');
    }

    public function render()
    {
        return view('livewire.users.components.business-create');
    }
}
