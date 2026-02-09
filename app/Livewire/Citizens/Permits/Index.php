<?php

namespace App\Livewire\Citizens\Permits;

use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public $account;


    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->with('permits')->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.permit-index');
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.permits.index', [
            'permits' => $this->account->permits()->with('period')->latest()->get(),
        ]);
    }
}
