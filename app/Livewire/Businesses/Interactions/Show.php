<?php

namespace App\Livewire\Businesses\Interactions;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.interactions.show');
    }
}
