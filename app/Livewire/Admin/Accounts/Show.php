<?php

namespace App\Livewire\Admin\Accounts;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $accountUlid;
    public $account;
    public $applications = [];


    public function mount($account)
    {
        $this->accountUlid = $account;
        $this->account = Account::where('ulid', $account)->with([
            'status.statusType',
            'statuses.statusType',
            'businesses.status.statusType'
        ])->first();

        if ($this->account->accountType->slug == 'citizen') {
            $this->account->load([
                'applications' => fn($q) => $q->latest(),
                'applications.service',
                'applications.status.statusType',
                'applications.account',
                'applications.account.accountType',
                'applications.account.user',
            ]);

            $this->applications = $this->account->applications->sortByDesc('created_at')->values();
        } elseif ($this->account->accountType->slug == 'merchant') {
            $this->account->load([
                'businesses.applications' => fn($q) => $q->latest(),
                'businesses.applications.service',
                'businesses.applications.status.statusType',
            ]);

            $this->applications = $this->account->businesses->flatMap->applications->sortByDesc('created_at')->values();
        } else {
            $this->applications = [];
        }
    }

    public function placeholder()
    {
        return view('placeholders.views.admins.accounts-show');
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.show', [
            'account' => $this->account,
            'applications' => $this->applications,
        ]);
    }
}
