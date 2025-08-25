<?php

namespace App\Livewire\Users\Actions;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $service;

    public function mount($service)
    {
        $this->service = Service::findOrFail($service);
    }
    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.actions.create');
    }
}
