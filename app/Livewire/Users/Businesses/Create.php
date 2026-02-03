<?php

namespace App\Livewire\Users\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.businesses.create');
    }
}
