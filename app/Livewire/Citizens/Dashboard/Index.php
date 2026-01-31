<?php

namespace App\Livewire\Citizens\Dashboard;

use App\Models\Account;
use App\Models\Service;
use App\Traits\AccountTypeId;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
   use AccountTypeId;
    public $account;
    public $services;
    public $applications;

    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();

        $this->services = Service::where('account_type_id', $this->getAccountTypeId('citizen'))->limit(4)->get();

        $this->applications = $this->account->applications()->latest()->limit(5)->get();

    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.citizens.dashboard.index');
    }
}
