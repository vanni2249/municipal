<?php

namespace App\Livewire\Citizens\Applications;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.citizens.applications.show');
    }
}
