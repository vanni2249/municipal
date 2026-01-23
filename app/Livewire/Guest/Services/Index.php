<?php

namespace App\Livewire\Guest\Services;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.guest.services.index');
    }
}
