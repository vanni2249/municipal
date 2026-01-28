<?php

namespace App\Livewire\Users\Accounts\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Attach extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.businesses.attach');
    }
}
