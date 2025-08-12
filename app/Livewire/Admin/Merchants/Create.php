<?php

namespace App\Livewire\Admin\Merchants;

use App\Livewire\Forms\Admin\MerchantForm;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public MerchantForm $form;

    public function save()
    {
        $this->validate();
        $this->form->save();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.create');
    }
}
