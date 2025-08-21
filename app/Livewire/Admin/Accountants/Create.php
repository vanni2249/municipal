<?php

namespace App\Livewire\Admin\Accountants;

use App\Livewire\Forms\Admin\MerchantForm;
use App\Models\Place;
use App\Models\Type;
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

    public function updated($propertyName)
    {
        if ($propertyName === 'form.type_id') {
            $this->form->place_id = null; //
        }
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.merchants.create', [
            'types' => Type::whereIn('id', [2, 3])->get(),
            'places' => Place::all(),
        ]);
    }
}
