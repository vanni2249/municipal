<?php

namespace App\Livewire\Users\Merchants;

use App\Livewire\Forms\User\MerchantForm;
use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantForm $form;
    public $user;

    public function mount($merchant)
    {
        $this->user = Auth::user();
        $this->form->merchant = Merchant::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->form->name = $this->form->merchant->name;
        $this->form->email = $this->form->merchant->email;
        $this->form->phone = $this->form->merchant->phone;
        $this->form->date_of_birth = $this->form->merchant->date_of_birth;
        $this->form->address = $this->form->merchant->address;
        $this->form->city = $this->form->merchant->city;
        $this->form->postal_code = $this->form->merchant->postal_code;
        $this->form->user_id = $this->user->id;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.edit');
    }
}
