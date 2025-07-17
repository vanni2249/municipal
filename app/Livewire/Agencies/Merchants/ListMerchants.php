<?php

namespace App\Livewire\Agencies\Merchants;

use Livewire\Component;

class ListMerchants extends Component
{
    public $head;
    public $show;

    public function render()
    {
        return view('livewire.agencies.merchants.list-merchants');
    }
}
