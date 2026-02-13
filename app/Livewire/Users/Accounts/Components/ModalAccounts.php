<?php

namespace App\Livewire\Users\Accounts\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ModalAccounts extends Component
{
    public function render()
    {
        return view('livewire.users.accounts.components.modal-accounts', [
            'accounts' => Auth::user()->accounts()->with('accountType', 'businesses')->orderBy('account_type_id', 'asc')->get(),
        ]);
    }
}
