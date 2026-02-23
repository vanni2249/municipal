<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class AccountDetail extends Component
{
    public $account;

    public function mount($account)
    {
        $this->account = $account;
    }

    public function render()
    {
        return view('livewire.admin.components.account-detail');
    }
}
