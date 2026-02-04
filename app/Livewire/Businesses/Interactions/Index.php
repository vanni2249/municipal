<?php

namespace App\Livewire\Businesses\Interactions;

use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $business;

    public function mount()
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->first();
    }

     #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.interactions.index', [
            'interactions' => $this->business->interactions()->paginate(10),
        ]);
    }
}
