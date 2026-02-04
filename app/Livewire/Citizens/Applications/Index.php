<?php

namespace App\Livewire\Citizens\Applications;

use App\Models\Account;
use App\Models\Application;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use \App\Traits\AccountTypeId;
    public $account;
    // public $services;

    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();
    }
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.applications.index', [
            'services' => Service::where('account_type_id', $this->getAccountTypeId('citizen'))->get(),
            'applications' => Application::with(['status', 'service', 'status.statusType', 'service.serviceType'])->where('account_id', $this->account->id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
