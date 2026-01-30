<?php

namespace App\Livewire\Businesses\Services;

use App\Models\Service;
use App\Traits\AccountTypeId;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use AccountTypeId;

    public $services;

    public function mount()
    {
        $this->services = Service::where('account_type_id', $this->getAccountTypeId('merchant'))->get();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.businesses.services.index');
    }
}
