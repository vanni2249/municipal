<?php

namespace App\Livewire\Applications\Businesses\RemoveTrash;

use Livewire\Component;

class Show extends Component
{
    public $application;
    public function mount($application)
    {
        $this->application = $application;
    }
    public function render()
    {
        return view('livewire.applications.businesses.remove-trash.show');
    }
}
