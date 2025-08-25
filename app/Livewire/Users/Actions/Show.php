<?php

namespace App\Livewire\Users\Actions;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.actions.show');
    }
}
