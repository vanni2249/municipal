<?php

namespace App\Livewire\Users\Merchants;

use App\Livewire\Forms\User\MerchantForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public MerchantForm $form;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $this->form->user_id = $this->user->id;
    }

    public function save()
    {
        $this->validate();

        $this->form->store();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.create');
    }
}
