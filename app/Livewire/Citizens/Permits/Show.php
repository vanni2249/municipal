<?php

namespace App\Livewire\Citizens\Permits;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.permits.show');
    }
}
