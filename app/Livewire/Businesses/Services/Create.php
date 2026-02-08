<?php

namespace App\Livewire\Businesses\Services;

use App\Models\Business;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $business;
    public $service;

    public function mount($service)
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->first();

        $this->service = Service::where('ulid', $service)->first();
    }

    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.services.create');
    }
}
