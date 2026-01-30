<?php

namespace App\Livewire\Users\Accounts\Businesses;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $businesses;

    public function mount($account)
    {
        $this->businesses = auth()->user()->accounts()
            ->where('ulid', $account)
            ->with('businesses')
            ->first()->businesses;
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.users.accounts.businesses.index');
    }
}
