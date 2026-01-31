<?php

namespace App\Livewire\Users\Accounts\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class AccountList extends Component
{
    public function mount()
    {
        sleep(1);
    }

    public function placeholder()
    {
        return view('placeholders.elements-skeleton');
    }

    public function render()
    {
        return view('livewire.users.accounts.components.account-list', [
            'accounts' => auth()->user()->accounts()->with('accountType')->orderBy('account_type_id', 'asc')->get(),
        ]);
    }
}
