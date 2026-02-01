<?php

namespace App\Livewire\Citizens\Dashboard;

use App\Models\Account;
use App\Models\Service;
use App\Traits\AccountTypeId;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
   use AccountTypeId;
    public $account;
    public $services;
    public $applications;

    public function mount()
    {
        sleep(1);
        
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();

        $this->services = Service::where('account_type_id', $this->getAccountTypeId('citizen'))->limit(4)->get();

        $this->applications = $this->account->applications()->latest()->limit(5)->get();

    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.dashboard');
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.citizens.dashboard.index');
    }
}
