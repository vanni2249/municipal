<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Livewire\Forms\User\Merchant\BusinessForm;
use App\Models\Business;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public BusinessForm $form;
    public $user;
    public $business_categories;

    public function mount($business)
    {
        $this->user = Auth::user();
        $this->business_categories = \App\Models\BusinessCategory::all();
        $this->form->business = Business::with(['businessCategory'])->findOrFail($business);
        $this->form->name = $this->form->business->name;
        $this->form->business_category_id = $this->form->business->business_category_id;
        $this->form->merchant_number = $this->form->business->merchant_number;
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
