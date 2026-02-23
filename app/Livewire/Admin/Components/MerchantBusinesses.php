<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class MerchantBusinesses extends Component
{
    public $businesses;

    public function mount($businesses)
    {
        $this->businesses = $businesses;
    }

    public function render()
    {
        return view('livewire.admin.components.merchant-businesses');
    }
}
