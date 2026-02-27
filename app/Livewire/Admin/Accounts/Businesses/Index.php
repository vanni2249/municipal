<?php

namespace App\Livewire\Admin\Accounts\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.businesses.index');
    }
}
