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
        $this->form->business_address = $business->addresses()->where('is_primary', true)->first();
        $this->form->name = $business->name;
        $this->form->number = $business->number;
        $this->form->place_id = $this->form->business_address->place_id;
        $this->form->address = $this->form->business_address->address;
        $this->form->city = $this->form->business_address->city;
        $this->form->postal_code = $this->form->business_address->postal_code;
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
