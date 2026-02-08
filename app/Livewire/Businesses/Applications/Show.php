<?php

namespace App\Livewire\Businesses\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $application;
    public $service;

    public function mount($application)
    {
        $this->application = Application::where('ulid', $application)->first();
        $this->service = $this->application->service;
    }
    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.applications.show');
    }
}
