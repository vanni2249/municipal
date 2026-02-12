<?php

namespace App\Livewire\Admin\Invoices;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.invoices.show');
    }
}
