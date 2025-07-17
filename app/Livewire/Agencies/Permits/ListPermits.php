<?php

namespace App\Livewire\Agencies\Permits;

use Livewire\Component;

class ListPermits extends Component
{
    public $head;
    public $show;
    public function render()
    {
        return view('livewire.agencies.permits.list-permits');
    }
}
