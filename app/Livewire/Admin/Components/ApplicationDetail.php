<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;

class ApplicationDetail extends Component
{
    public $application;

    public function mount($application)
    {
        $this->application = $application;
    }

    public function render()
    {
        return view('livewire.admin.components.application-detail');
    }
}
