<?php

namespace App\Livewire\Users\Accounts;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.index', [
            'accounts' => auth()->user()->accounts()->with('accountType')->orderBy('account_type_id', 'asc')->get(),
        ]);
    }
}
