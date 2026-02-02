<?php

namespace App\Livewire\Citizens\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $application;

    public function mount($application)
    {
        $this->application = Application::where('ulid', $application)->first();
    }
    
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.applications.show');
    }
}
