<?php

namespace App\Livewire\Admin\Accounts\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $account;
    public $application;
    public function mount($account, $application)
    {
        $this->account = $account;
        $this->application = Application::where('ulid', $application)->firstOrFail();
    }
    
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.applications.show');
    }
}
