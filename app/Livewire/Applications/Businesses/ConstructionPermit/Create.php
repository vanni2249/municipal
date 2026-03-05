<?php

namespace App\Livewire\Applications\Businesses\ConstructionPermit;

use App\Models\AppBusinessConstructionPermit;
use App\Traits\ApplicationNumber;
use App\Traits\ApplicationUlid;
use App\Traits\StatusTypeId;
use Livewire\Component;

class Create extends Component
{
    use ApplicationUlid, ApplicationNumber, StatusTypeId;
    public $business;
    public $service;
    
    public function render()
    {
        return view('livewire.applications.businesses.construction-permit.create');
    }
}
