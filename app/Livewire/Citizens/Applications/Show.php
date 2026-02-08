<?php

namespace App\Livewire\Citizens\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $application;

    public function mount($application)
    {
        $this->application = Application::where('ulid', $application)->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.application-show');
    }
    
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.applications.show');
    }
}
