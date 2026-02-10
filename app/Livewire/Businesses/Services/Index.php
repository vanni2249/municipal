<?php

namespace App\Livewire\Businesses\Services;

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
        $this->services = Service::where('account_type_id', $this->getAccountTypeId('merchant'))->get();
    }

    public function placeholder()
    {
        return view('placeholders.views.businesses.services-index');
    }

    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.services.index');
    }
}
