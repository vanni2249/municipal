<?php

namespace App\Livewire\Admin\Merchants;

use App\Livewire\Forms\Admin\MerchantForm;
use App\Models\Merchant;
use App\Models\Place;
use App\Models\Register;
use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantForm $form;


    public function mount($merchant)
    {
        $this->form->merchant = Register::findOrFail($merchant);
        $this->form->merchant_address = $this->form->merchant->addresses()->where('is_primary', true)->first();
        $this->form->type_id = $this->form->merchant->type_id;
        $this->form->name = $this->form->merchant->name;
        $this->form->lastname = $this->form->merchant->lastname;
        $this->form->date_of_birth = $this->form->merchant->date_of_birth;
        $this->form->email = $this->form->merchant->email;
        $this->form->phone = $this->form->merchant->phone;
        $this->form->place_id = $this->form->merchant->place_id;
        $this->form->address = $this->form->merchant_address->address;
        $this->form->city = $this->form->merchant_address->city;
        $this->form->postal_code = $this->form->merchant_address->postal_code;
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'form.type_id') {
            $this->form->place_id = null; //
        }
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }
    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.edit',[
            'types' => Type::whereIn('id', [2,3])->get(),
            'places' => Place::all()
        ]);
    }
}
