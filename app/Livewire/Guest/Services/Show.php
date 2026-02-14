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
            'services' => Service::where('account_type_id', $this->service->account_type_id)->whereNot('ulid', $this->service->ulid)->limit(4)->get(),    
        ]);
    }
}
