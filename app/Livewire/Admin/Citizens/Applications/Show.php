<?php

namespace App\Livewire\Admin\Citizens\Applications;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $account;
    public $application;

    public $service_slug;

    public function mount($citizen, $application)
    {
        $this->account = Account::where('ulid', $citizen)->first();
        $this->application = $this->account->applications()->where('ulid', $application)->with([
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
        return view('livewire.admin.citizens.applications.show');
    }
}
