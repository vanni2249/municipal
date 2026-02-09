<?php

namespace App\Livewire\Citizens\Interactions;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public $account;

    public function mount()
    {
        $this->account = Account::where('ulid', session('data.account_ulid'))->first();

    }

    public function placeholder()
    {
        return view('placeholders.views.citizens.interaction-index');
    }

    #[Layout('layouts.citizen')]
    public function render()
    {
        return view('livewire.citizens.interactions.index', [
            'interactions' => $this->account->interactions()->orderBy('id', 'desc')->paginate(15),
        ]);
    }
}
