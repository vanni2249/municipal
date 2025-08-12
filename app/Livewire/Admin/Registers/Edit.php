<?php

namespace App\Livewire\Admin\Registers;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.registers.edit');
    }
}
