<?php

namespace App\Livewire\Admin\Merchants\Businesses;

use App\Livewire\Forms\Admin\MerchantBusinessForm;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantBusinessForm $form;

    public function mount($merchant, $business)
    {
        $this->form->business = Business::where('merchant_id', $merchant)
            ->findOrFail($business);
        $this->form->merchant = $this->form->business->merchant;
        $this->form->business_category_id = $this->form->business->business_category_id;
        $this->form->name = $this->form->business->name;
        $this->form->merchant_number = $this->form->business->merchant_number;
        $this->form->address = $this->form->business->address;
        $this->form->place_id = $this->form->business->place_id;
        $this->form->postal_code = $this->form->business->postal_code;
        $this->form->phone = $this->form->business->phone;
        $this->form->email = $this->form->business->email;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.edit',[
            'categories' => BusinessCategory::all(),
            'places' => Place::all(),
        ]);
    }
}
