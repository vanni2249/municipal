<?php

namespace App\Livewire\Users\Businesses\Actions;

use App\Models\Business;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $business;
    public $service;

    public function mount($business = null, $service = null)
    {
        $this->business = Business::findOrFail($business);
        $this->service = Service::where('id', $service)->first();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.actions.create');
    }
}
