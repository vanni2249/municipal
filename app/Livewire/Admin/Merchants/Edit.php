<?php

namespace App\Livewire\Admin\Merchants;

use App\Livewire\Forms\Admin\MerchantForm;
use App\Models\Merchant;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantForm $form;


    public function mount($merchant)
    {
        $this->form->merchant = Merchant::findOrFail($merchant);
        $this->form->name = $this->form->merchant->name;
        $this->form->date_of_birth = $this->form->merchant->date_of_birth;
        $this->form->email = $this->form->merchant->email;
        $this->form->phone = $this->form->merchant->phone;
        $this->form->address = $this->form->merchant->address;
        $this->form->city = $this->form->merchant->city;
        $this->form->postal_code = $this->form->merchant->postal_code;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.edit');
    }
}
