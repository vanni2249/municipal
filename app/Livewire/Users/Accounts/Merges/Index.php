<?php

namespace App\Livewire\Users\Accounts\Merges;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $account;

    public function mount($account)
    {
        $this->account = Account::where('ulid', $account)->firstOrFail();
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.merges.index', [
            'merges' => $this->account->merges->groupBy('account_merchant_id'),
        ]);
    }
}
