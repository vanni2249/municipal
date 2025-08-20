<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Livewire\Forms\User\MerchantBusinessForm;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessType;
use App\Models\Merchant;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantBusinessForm $form;
    public $user;

    public function mount($merchant, $business)
    {
        $this->user = Auth::user();
        $this->form->business = Business::findOrFail($business);
        $this->form->business_category_id = $this->form->business->business_category_id;
        $this->form->business_type_id = $this->form->business->business_type_id;
        $this->form->name = $this->form->business->name;
        $this->form->number = $this->form->business->number;
        $this->form->place_id = $this->form->business->place_id;
        $this->form->address = $this->form->business->address;
        $this->form->city = $this->form->business->city;
        $this->form->postal_code = $this->form->business->postal_code;
        $this->form->phone = $this->form->business->phone;
        // $this->form->merchant = Merchant::findOrFail($merchant);
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.businesses.edit',[
            'business_types' => BusinessType::all()->sortBy('name'),
            'business_categories' => BusinessCategory::all()->sortBy('name'),
            'places' => Place::all()->sortBy('name'),
        ]);
    }
}
