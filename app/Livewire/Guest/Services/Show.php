<?php

namespace App\Livewire\Guest\Services;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $service;
    public function mount($service)
    {
        $this->service = Service::where('ulid', $service)->firstOrFail();
    }
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.guest.services.show', [
            'service' => $this->service,
            'type' => $this->service->serviceType,
        ]);
    }
}
