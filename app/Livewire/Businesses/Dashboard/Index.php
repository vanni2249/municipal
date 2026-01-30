<?php

namespace App\Livewire\Businesses\Dashboard;

use App\Models\Business;
use App\Models\Service;
use App\Traits\AccountTypeId;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use AccountTypeId;
    public $business;
    public $services;

    public function mount()
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->first();
        // Only 4 citizen services
        $this->services = Service::where('account_type_id', $this->getAccountTypeId('business'))->limit(4)->get();

    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.businesses.dashboard.index');
    }
}
