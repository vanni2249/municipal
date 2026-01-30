<?php

namespace App\Livewire\Citizens\Dashboard;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $account;

    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();

        // dd(session('data.account_ulid'));
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.citizens.dashboard.index');
    }
}
