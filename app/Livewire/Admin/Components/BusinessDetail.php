<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class BusinessDetail extends Component
{
    public $business;

     public function mount($business)
    {
        $this->business = $business;
    }
    public function render()
    {
        return view('livewire.admin.components.business-detail');
    }
}
