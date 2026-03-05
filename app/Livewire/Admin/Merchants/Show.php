<?php

namespace App\Livewire\Admin\Merchants;

use App\Models\Account;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $merchant;

    public function mount($merchant)
    {
        $this->merchant = Account::where('ulid', $merchant)->with([
            'status.statusType',
            'statuses.statusType',
            'applications' => fn($q) => $q->latest(),
            'applications.service',
            'applications.status.statusType',
            'applications.account',
            'applications.account.accountType',
            'applications.account.user',
        ])->first();
    }
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.merchants.show', [
            'merchant' => $this->merchant,
        ]);
    }
}
