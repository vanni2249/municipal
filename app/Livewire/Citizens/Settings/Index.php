<?php

namespace App\Livewire\Citizens\Settings;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.citizens.settings.index');
    }
}
