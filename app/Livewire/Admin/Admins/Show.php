<?php

namespace App\Livewire\Admin\Admins;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admins.show');
    }
}
