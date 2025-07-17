<?php

namespace App\Livewire\Agencies\Patents;

use Livewire\Component;

class ListPatents extends Component
{
    public $head;
    public $show;
    public function render()
    {
        return view('livewire.agencies.patents.list-patents');
    }
}
