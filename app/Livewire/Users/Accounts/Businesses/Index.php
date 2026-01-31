<?php

namespace App\Livewire\Users\Accounts\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $account;

    public function mount($account)
    {
        $this->account = $account;
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.businesses.index');
    }
}
