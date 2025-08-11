<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Livewire\Forms\User\Merchant\BusinessForm;
use App\Models\BusinessCategory;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public BusinessForm $form;
    public $merchant;
    public $user;
    public $business_categories;

    public function mount($merchant)
    {
        $this->user = Auth::user();
        $this->merchant = Register::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->form->register = $this->merchant;
        $this->business_categories = BusinessCategory::all()->sortBy('name');
    }

    public function save()
    {
        $this->validate();

        $this->form->store();
    }

    public function render()
    {
        return view('livewire.users.merchants.businesses.create');
    }
}
