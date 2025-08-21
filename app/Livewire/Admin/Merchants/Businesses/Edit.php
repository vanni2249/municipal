<?php

namespace App\Livewire\Admin\Merchants\Businesses;

use App\Livewire\Forms\Admin\MerchantBusinessForm;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessType;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantBusinessForm $form;

    public function mount($merchant, $business)
    {
        $this->form->business = Business::where('register_id', $merchant)
            ->findOrFail($business);
        $this->form->merchant = $this->form->business->merchant;
        $this->form->business_type_id = $this->form->business->business_type_id;
        $this->form->business_category_id = $this->form->business->business_category_id;
        $this->form->name = $this->form->business->name;
        $this->form->number = $this->form->business->number;
        $this->form->phone = $this->form->business->phone;
        $this->form->place_id = $this->form->business->place_id;
        $this->form->address = $this->form->business->address;
        $this->form->city = $this->form->business->city;
        $this->form->postal_code = $this->form->business->postal_code;
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
            'business_categories' => BusinessCategory::all(),
            'business_types' => BusinessType::all(),
            'places' => Place::all(),
        ]);
    }
}
