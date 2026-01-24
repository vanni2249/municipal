<?php

namespace App\Livewire\Admin\Users\Sessions;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.sessions.show');
    }
}
