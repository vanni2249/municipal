<?php

namespace App\Livewire\Businesses\Applications;

use App;
use App\Models\Application;
use App\Models\Business;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use \App\Traits\AccountTypeId;

    public $applications;
    public $business;

    public function mount()
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->first();

        $this->applications = Application::where('business_id', $this->business->id)->latest()->take(5)->get();
    }

     #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.applications.index',[
            'services' => Service::where('account_type_id', $this->getAccountTypeId('merchant'))->get(),
            
        ]);
    }
}
