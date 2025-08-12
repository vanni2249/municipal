<?php

namespace App\Livewire\Admin\Citizens;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.citizens.show');
    }
}
