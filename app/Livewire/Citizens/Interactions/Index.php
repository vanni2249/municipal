<?php

namespace App\Livewire\Citizens\Interactions;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.interactions.index');
    }
}
