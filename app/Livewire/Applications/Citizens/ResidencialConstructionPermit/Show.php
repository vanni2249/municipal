<?php

namespace App\Livewire\Applications\Citizens\ResidencialConstructionPermit;

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
        return view('livewire.applications.citizens.residencial-construction-permit.show');
    }
}
