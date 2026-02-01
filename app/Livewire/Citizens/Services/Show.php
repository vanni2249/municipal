<?php

namespace App\Livewire\Citizens\Services;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $service;

    public function mount($service)
    {
        $this->service = Service::where('ulid', $service)->first();
    }
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.citizens.services.show');
    }
}
