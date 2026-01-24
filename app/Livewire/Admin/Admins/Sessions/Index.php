<?php

namespace App\Livewire\Admin\Admins\Sessions;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admins.sessions.index');
    }
}
