<?php

namespace App\Livewire\Businesses\Patents;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.patents.show');
    }
}
