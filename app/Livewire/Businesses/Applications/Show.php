<?php

namespace App\Livewire\Businesses\Applications;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.businesses.applications.show');
    }
}
