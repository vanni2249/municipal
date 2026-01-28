<?php

namespace App\Livewire\Users\Accounts\Merges;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.merges.create');
    }
}
