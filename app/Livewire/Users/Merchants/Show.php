<?php

namespace App\Livewire\Users\Merchants;

use App\Livewire\Forms\User\Merchant\MerchantForm;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public MerchantForm $form;
    public $user;

    public function mount($merchant)
    {
        $this->user = Auth::user();
        $this->form->merchant = Register::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->form->merchant_name = $this->form->merchant->name;
        $this->form->merchant_email = $this->form->merchant->email;
        $this->form->merchant_phone = $this->form->merchant->phone;
        $this->form->merchant_date_of_birth = $this->form->merchant->date_of_birth;
        $this->form->merchant_address = $this->form->merchant->address;
        $this->form->merchant_city = $this->form->merchant->city;
        $this->form->merchant_postal_code = $this->form->merchant->postal_code;
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
            'form.merchant_email' => 'required|email|max:255|unique:registers,email,'.$this->form->merchant->id,
        ]);

        $this->form->update();

        $this->dispatch('close-modal', 'edit-merchant-modal');
    }

    public function saveBusiness()
    {
    }

    public function render()
    {
        return view('livewire.users.merchants.show',[
            'items' => $this->items(),
        ]);
    }
}
