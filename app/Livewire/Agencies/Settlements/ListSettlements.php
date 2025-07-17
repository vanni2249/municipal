<?php

namespace App\Livewire\Agencies\Settlements;

use Livewire\Component;

class ListSettlements extends Component
{
    public $head;
    public $show;
    public function render()
    {
        return view('livewire.agencies.settlements.list-settlements');
    }
}
