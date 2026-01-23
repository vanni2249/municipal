<?php

namespace App\Livewire\Citizens\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.citizens.dashboard.index');
    }
}
