<?php

namespace App\Livewire\Users\Accounts;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public $merchant_account_number;
    public $merchant_account_code;

    public function mount()
    {
        sleep(1);
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

        $this->dispatch('close-modal','attach-merchant-account-modal');
    }

    public function createMerchantAccount()
    {

    }

    public function placeholder()
    {
        return view('placeholders.views.users.account-index-skeleton');
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.index', [
            'accounts' => auth()->user()->accounts()->with('accountType')->whereIn('account_type_id', [1, 2])->orderBy('account_type_id', 'asc')->get(),
        ]);
    }
}
