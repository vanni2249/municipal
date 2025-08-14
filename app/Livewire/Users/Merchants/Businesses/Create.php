<?php

namespace App\Livewire\Users\Merchants\Businesses;

use App\Livewire\Forms\User\MerchantBusinessForm;
use App\Models\BusinessCategory;
use App\Models\Merchant;
use App\Models\Place;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public MerchantBusinessForm $form;
    public $user;
    public $business_categories;
    public $places;

    public function mount($merchant)
    {
        $this->user = Auth::user();
        $this->form->merchant = Merchant::where('user_id', $this->user->id)->findOrFail($merchant);
        $this->business_categories = BusinessCategory::all()->sortBy('name');
        $this->places = Place::all()->sortBy('name');
    }

    public function save()
    {
        $this->validate();

        $this->form->store();
    }

    #[Layout('components.layouts.users.index')]
    public function render()
    {
        return view('livewire.users.merchants.businesses.create');
    }
}
