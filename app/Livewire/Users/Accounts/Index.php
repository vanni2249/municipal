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
            'account_citizen' => auth()->user()->accounts()->with('accountType')->where('account_type_id', 1)->first(),
            'account_merchant' => auth()->user()->accounts()->with(['accountType', 'businesses'])->where('account_type_id', 2)->first(),
            'account_accountant' => auth()->user()->accounts()->with('accountType')->where('account_type_id', 3)->first(),
        ]);
    }
}
