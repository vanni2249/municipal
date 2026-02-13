<?php

namespace App\Livewire\Guest\Welcome;

use App\Models\Account;
use App\Models\AccountType;
use App\Models\Service;
use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::get();
    }

    #[Layout('layouts.landing')]
    public function render()
    {
        return view('livewire.guest.welcome.index', [
            'accountTypes' => AccountType::whereIn('slug', ['citizen', 'merchant'])->get(),
        ]);
    }
}
