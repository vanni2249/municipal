<?php

namespace App\Livewire\Citizens\Applications;

use App\Models\Account;
use App\Models\Application;
use App\Models\Service;
use App\Models\ServiceType;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use \App\Traits\AccountTypeId;
    public $account;

    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.application-index');
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.applications.index', [
            'services' => Service::where('account_type_id', $this->getAccountTypeId('citizen'))->get(),
            'applications' => Application::with(['status', 'service', 'status.statusType', 'service.serviceType'])->where('account_id', $this->account->id)->orderBy('created_at', 'desc')->get(),
            'service_types' => ServiceType::get()
        ]);
    }
}
