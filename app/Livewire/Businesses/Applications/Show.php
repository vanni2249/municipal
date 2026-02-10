<?php

namespace App\Livewire\Businesses\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $application;
    public $service;

    public function mount($application)
    {
        $this->application = Application::where('ulid', $application)->first();
        $this->service = $this->application->service;
    }

    public function placeholder()
    {
        return view('placeholders.views.businesses.application-show');
    }

    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.applications.show');
    }
}
