<?php

namespace App\Livewire\Businesses\Services;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
     #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.businesses.services.index');
    }
}
