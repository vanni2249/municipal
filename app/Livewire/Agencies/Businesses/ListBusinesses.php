<?php

namespace App\Livewire\Agencies\Businesses;

use Livewire\Component;

class ListBusinesses extends Component
{
    public $head;
    public $show;
    public function render()
    {
        return view('livewire.agencies.businesses.list-businesses');
    }
}
