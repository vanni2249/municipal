<?php

namespace App\Livewire\Citizens\Permits;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.permits.index');
    }
}
