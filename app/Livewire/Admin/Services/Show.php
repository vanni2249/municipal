<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $serviceUlid;
    public function mount($service)
    {
        $this->serviceUlid = $service;
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.services.show', [
            'service' => Service::with(['accountType', 'serviceType', 'applications'])->where('ulid', $this->serviceUlid)->first(),
        ]);
    }
}
