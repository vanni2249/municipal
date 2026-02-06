<?php

namespace App\Livewire\Citizens\Services;

use App\Models\Service;
use App\Traits\AccountTypeId;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use AccountTypeId;

    public $services;

    public function mount()
    {
        sleep(1); // Simulate loading delay
        $this->services = Service::where('account_type_id', $this->getAccountTypeId('citizen'))->get();
    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.services-index');
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.services.index');
    }
}
