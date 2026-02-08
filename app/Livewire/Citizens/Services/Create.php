<?php

namespace App\Livewire\Citizens\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Create extends Component
{
    public $account;
    public $service;

    public function mount($service)
    {
        sleep(1);
        $this->account = Auth::user()->accounts->where('ulid', session('data.account_ulid'))->first();
        $this->service = Service::where('ulid', $service)->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.services-create');
    }
    
    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.services.create');
    }
}
