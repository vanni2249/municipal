<?php

namespace App\Livewire\Guest\Events;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.guest.events.show');
    }
}
