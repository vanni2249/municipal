<?php

namespace App\Livewire\Guest\Departments;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.guest.departments.show');
    }
}
