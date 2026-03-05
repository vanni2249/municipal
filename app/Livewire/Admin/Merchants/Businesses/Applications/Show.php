<?php

namespace App\Livewire\Admin\Merchants\Businesses\Applications;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $account;
    public $business;
    public $application;
    public $service_slug;

    public function mount($merchant, $business, $application)
    {
        $this->account = Account::where('ulid', $merchant)->first();
        $this->business = $this->account->businesses()->where('ulid', $business)->first();
        $this->application = $this->business->applications()->where('ulid', $application)->with([
            'service',
            'status.statusType',
            'account',
            'account.accountType',
            'account.user',
        ])->first();
        $this->service_slug = $this->application->service->slug;
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.applications.show');
    }
}
