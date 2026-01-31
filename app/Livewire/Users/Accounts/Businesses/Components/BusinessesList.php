<?php

namespace App\Livewire\Users\Accounts\Businesses\Components;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class BusinessesList extends Component
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
        return view('placeholders.elements-skeleton');
    }

    public function render()
    {
        return view('livewire.users.accounts.businesses.components.businesses-list');
    }
}
