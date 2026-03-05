<?php

namespace App\Livewire\Admin\Citizens\Applications;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $service_slug;
    public $service;

    public $account;

    public function mount($service, $citizen)
    {
        // dd($service, $citizen);
        $this->service_slug = $service;
        $this->service = \App\Models\Service::where('slug', $service)->first();
        $this->account = Account::where('ulid', $citizen)->first();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.citizens.applications.create');
    }
}
