<?php

namespace App\Livewire\Businesses\Permits;

use App\Models\Account;
use App\Models\Business;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public $business;

    public function mount()
    {
        $this->business = Business::where('ulid', session('data.business_ulid'))->with('permits')->first();
    }

    public function placeholder()
    {
        return view('placeholders.views.businesses.permit-index');
    }
    #[Layout('layouts.business')]
    public function render()
    {
        return view('livewire.businesses.permits.index', [
            'permits' => $this->business->permits()->with('period')->latest()->get(),
        ]);
    }
}
