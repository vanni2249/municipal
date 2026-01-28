<?php

namespace App\Livewire\Users\Accounts\Merges;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Attach extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.merges.attach');
    }
}
