<?php

namespace App\Livewire\Admin\Merchants\Businesses;

use App\Models\Business;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

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
        return view('livewire.admin.merchants.businesses.show', [
            'business' => $this->business,
            'services' => Service::where('account_type_id', $this->business->account->account_type_id)->get(),
        ]);
    }
}
