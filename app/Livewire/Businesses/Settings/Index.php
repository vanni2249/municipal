<?php

namespace App\Livewire\Businesses\Settings;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
     #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.businesses.settings.index');
    }
}
