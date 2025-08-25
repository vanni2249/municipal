<?php

namespace App\Livewire\Users\Businesses\Actions;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.actions.index');
    }
}
