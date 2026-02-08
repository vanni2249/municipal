<?php

namespace App\Livewire\Businesses\Permits;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.permits.index');
    }
}
