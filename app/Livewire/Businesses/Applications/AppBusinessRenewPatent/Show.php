<?php

namespace App\Livewire\Businesses\Applications\AppBusinessRenewPatent;

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
        return view('livewire.businesses.applications.app-business-renew-patent.show');
    }
}
