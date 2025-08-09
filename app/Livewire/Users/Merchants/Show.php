<?php

namespace App\Livewire\Users\Merchants;

use App\Livewire\Forms\User\MerchantRegisterForm;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public MerchantRegisterForm $form;
    public $user;

    public function mount($merchant)
    {
        $this->user = Auth::user();
        $this->form->merchant = Register::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->form->name = $this->form->merchant->name;
        $this->form->email = $this->form->merchant->email;
        $this->form->phone = $this->form->merchant->phone;
        $this->form->date_of_birth = $this->form->merchant->date_of_birth;
        $this->form->address = $this->form->merchant->address;
        $this->form->city = $this->form->merchant->city;
        $this->form->postal_code = $this->form->merchant->postal_code;
    }

    public function items()
    {
        return [
            ['key' => 'Nombre', 'value' => $this->form->merchant->name],
            ['key' => 'Email', 'value' => $this->form->merchant->email],
            ['key' => 'Telefono', 'value' => $this->form->merchant->phone],
            ['key' => 'Fecha de Nacimiento', 'value' => $this->form->merchant->date_of_birth],
            ['key' => 'Direccion', 'value' => $this->form->merchant->address],
            ['key' => 'Ciudad', 'value' => $this->form->merchant->city],
            ['key' => 'Codigo Postal', 'value' => $this->form->merchant->postal_code],
        ];
    }

    public function save()
    {
        $this->validate([
            'form.email' => 'required|email|max:255|unique:registers,email,'.$this->form->merchant->id,
        ]);

        $this->form->update();

        $this->dispatch('close-modal', 'edit-merchant-modal');
    }

    public function render()
    {
        return view('livewire.users.merchants.show',[
            'items' => $this->items(),
        ]);
    }
}
