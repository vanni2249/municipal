<?php

namespace App\Livewire\Businesses\Services;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
     public $service;

    public function mount($service)
    {
        $this->service = Service::where('ulid', $service)->first();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.businesses.services.create');
    }
}
