<?php

namespace App\Livewire\Users\Components;

use App\Models\Account;
use App\Traits\AccountNumber;
use App\Traits\AccountTypeId;
use App\Traits\AccountUlid;
use Livewire\Attributes\On;
use Livewire\Component;

class Accounts extends Component
{
    use AccountUlid, AccountNumber, AccountTypeId;

    public $user;
    public $accounts;
    public $account_number;
    public $account_code;


    public function mount($accounts)
    {
        $this->accounts = $accounts;
    }


    public function attachMerchantAccount()
    {
        $this->validate([
            'account_number' => 'required|string',
            'account_code' => 'required|string',
        ]);

        $account = Account::where('account_type_id', 2)
            ->where('number', $this->account_number)
            ->where('code', $this->account_code)
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

        $this->redirect(route('users.accounts.index'), navigate: true);

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
        $this->redirect(route('users.accounts.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.users.components.accounts', [
            'accounts' => $this->accounts
        ]);
    }
}
