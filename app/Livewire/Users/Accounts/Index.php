<?php

namespace App\Livewire\Users\Accounts;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function mount()
    {
        sleep(1);
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
