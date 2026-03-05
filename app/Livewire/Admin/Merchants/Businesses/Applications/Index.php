<?php

namespace App\Livewire\Admin\Merchants\Businesses\Applications;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.applications.index');
    }
}
