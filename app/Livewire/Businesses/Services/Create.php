<?php

namespace App\Livewire\Businesses\Services;

use App\Models\Business;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Create extends Component
{
    public $business;
    public $service;

    public function mount($service)
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->first();

        $this->service = Service::where('ulid', $service)->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.businesses.services-create');
    }

    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.services.create');
    }
}
