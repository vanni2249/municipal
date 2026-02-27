<?php

namespace App\Livewire\Admin\Accounts\Businesses\Applications;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $account;
    public $business;
    public $application;
    public function mount($account, $business, $application)
    {
        $this->account = $account;
        $this->business = $business;
        $this->application = $application;
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.businesses.applications.show');
    }
}
