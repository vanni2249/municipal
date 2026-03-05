<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class MerchantBusinesses extends Component
{
    public $account;
    public $businesses;

    public function mount($account)
    {
        $this->account = $account;
        $this->businesses = $account->businesses;
    }

    public function render()
    {
        return view('livewire.admin.components.merchant-businesses');
    }
}
