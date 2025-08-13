<?php

namespace App\Livewire\Admin\Merchants\Businesses;

use App\Livewire\Forms\Admin\MerchantBusinessForm;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public MerchantBusinessForm $form;

    public function mount($merchant)
    {
        $this->form->merchant = $merchant;
    }

    public function save()
    {
        $this->validate();

        $this->form->store();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.businesses.create',[
            'categories' => BusinessCategory::all(),
            'places' => Place::all(),
        ]);
    }
}
