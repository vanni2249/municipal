<?php

namespace App\Livewire\Users\Accounts\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public $businesses;

    public function mount($account)
    {
        sleep(1);
        $this->businesses = auth()->user()->accounts()
            ->where('ulid', $account)
            ->with('businesses')
            ->first()->businesses;
    }

    public function placeholder()
    {
        return view('placeholders.views.users.account-businesses-index');
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.businesses.index');
    }
}
