<?php

namespace App\Livewire\Guest\PressReales;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.guest.press-reales.show');
    }
}
