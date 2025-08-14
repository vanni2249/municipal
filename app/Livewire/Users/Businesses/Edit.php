<?php

namespace App\Livewire\Users\Businesses;

use App\Livewire\Forms\User\BusinessForm;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessType;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public BusinessForm $form;

    public function mount(Business $business)
    {
        $this->form->business = $business;
        $this->form->business_type_id = $business->business_type_id;
        $this->form->business_category_id = $business->business_category_id;
        $this->form->name = $business->name;
        $this->form->merchant_number = $business->merchant_number;
        $this->form->address = $business->address;
        $this->form->place_id = $business->place_id;
        $this->form->postal_code = $business->postal_code;
        $this->form->phone = $business->phone;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.businesses.edit', [
            'business_types' => BusinessType::all(),
            'business_categories' => BusinessCategory::all(),
            'places' => Place::all(),
        ]);
    }
}
