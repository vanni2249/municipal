<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Livewire\Forms\User\MerchantBusinessForm;
use App\Models\Business;
use App\Models\Merchant;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public MerchantBusinessForm $form;
    public $user;
    public $business_categories;
    public $places;

    public function mount($merchant, $business)
    {
        $this->user = Auth::user();
        $this->business_categories = \App\Models\BusinessCategory::all();
        $this->places = Place::all();
        $this->form->business = Business::with(['businessCategory'])->findOrFail($business);
        $this->form->name = $this->form->business->name;
        $this->form->business_category_id = $this->form->business->business_category_id;
        $this->form->merchant_number = $this->form->business->merchant_number;
        $this->form->address = $this->form->business->address;
        $this->form->place_id = $this->form->business->place_id;
        $this->form->postal_code = $this->form->business->postal_code;
        $this->form->phone = $this->form->business->phone;
        $this->form->email = $this->form->business->email;
        $this->form->merchant = Merchant::where('user_id', $this->user->id)->findOrFail($merchant);
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.businesses.edit');
    }
}
