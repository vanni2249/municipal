<?php

namespace App\Livewire\Admin\Merchants\Businesses;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $business;

    public function mount($business)
    {
        dd($business);
        $this->business = Business::findOrFail($business);
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.index');
    }
}
