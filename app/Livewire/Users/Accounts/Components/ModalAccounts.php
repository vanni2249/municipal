<?php

namespace App\Livewire\Users\Accounts\Components;

use Livewire\Component;

class ModalAccounts extends Component
{
    public function render()
    {
        return view('livewire.users.accounts.components.modal-accounts', [
            'accounts' => auth()->user()->accounts,
        ]);
    }
}
