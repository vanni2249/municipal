<?php

namespace App\Livewire\Admin\Accounts\Businesses\Applications;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $account;
    public $business;
    public $application;
    public function mount($account, $business, $application)
    {
        $this->account = Account::where('ulid', $account)->firstOrFail();
        $this->business = $this->account->businesses()->where('ulid', $business)->firstOrFail();
        $this->application = $this->business->applications()->where('ulid', $application)->firstOrFail();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.businesses.applications.show');
    }
}
