<?php

namespace App\Livewire\Admin\Accounts\Businesses;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Show extends Component
{
    public $business;

     public function mount($business)
    {
        $this->business = Business::where('ulid', $business)->firstOrFail();
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.businesses.show');
    }
}
