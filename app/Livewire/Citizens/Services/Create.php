<?php

namespace App\Livewire\Citizens\Services;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.citizens.services.create');
    }
}
