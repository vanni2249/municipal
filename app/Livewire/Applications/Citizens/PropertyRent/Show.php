<?php

namespace App\Livewire\Applications\Citizens\PropertyRent;

use Livewire\Component;

class Show extends Component
{
    public $application;

    public function mount($application)
    {
        $this->application = $application;
    }

    public function render()
    {
        return view('livewire.applications.citizens.property-rent.show');
    }
}
