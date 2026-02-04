<?php

namespace App\Livewire\Citizens\Applications;

use App\Models\Account;
use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
     public $applications;
    public $account;

    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();
        $this->applications = Application::where('account_id', $this->account->id)->orderBy('created_at', 'desc')->get();
        
    }
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.applications.index');
    }
}
