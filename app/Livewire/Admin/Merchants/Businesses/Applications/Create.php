<?php

namespace App\Livewire\Admin\Merchants\Businesses\Applications;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $account;
    public $business;
    public $service_slug;
    public $service;


    public function mount($merchant, $business, $service)
    {
        $this->account = Account::where('ulid', $merchant)->first();
        $this->business = \App\Models\Business::where('ulid', $business)->first();
        $this->service_slug = $service;
        $this->service = \App\Models\Service::where('slug', $service)->first();
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.applications.create');
    }
}
