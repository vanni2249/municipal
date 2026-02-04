<?php

namespace App\Livewire\Citizens\Applications\AppCitizenResidencialConstructionPermit;

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
        return view('livewire.citizens.applications.app-citizen-residencial-construction-permit.show');
    }
}
