<?php

namespace App\Livewire\Admin\Citizens\Applications;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.citizens.applications.index');
    }
}
