<?php

namespace App\Livewire\Users\Merchants;

use App\Livewire\Forms\User\Merchant\MerchantForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
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

        $this->dispatch('close-modal', 'create-register-modal');
    }

    public function render()
    {
        return view('livewire.users.merchants.index', [
            'merchants' => $this->user->registers()->where('type_id', 2)->get(),
        ]);
    }
}
