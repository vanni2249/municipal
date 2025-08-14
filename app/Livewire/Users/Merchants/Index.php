<?php

namespace App\Livewire\Users\Merchants;

use App\Livewire\Forms\User\Merchant\MerchantForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.index', [
            'merchants' => $this->user->merchants()->get(),
        ]);
    }
}
