<?php

namespace App\Livewire\Users\Applications;

use App\Models\Service;
use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $service;

    public function mount($service)
    {
        $this->service = Service::where('type_id', Type::where('key', session('type_navigation'))->first()->id)->findOrFail($service);
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.applications.create');
    }
}
