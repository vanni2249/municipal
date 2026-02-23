<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class AdminPositions extends Component
{
    public $admin;

    public function mount($admin)
    {
        $this->admin = $admin;
    }

    public function render()
    {
        return view('livewire.admin.components.admin-positions');
    }
}
