<?php

namespace App\Livewire\Admin\Users\Statuses;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.statuses.index');
    }
}
