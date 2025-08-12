<?php

namespace App\Livewire\Admin\Registers;

use App\Livewire\Forms\Admin\RegisterForm;
use App\Models\Place;
use App\Models\Type;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public RegisterForm $form;

    public function updated($property)
    {
        if ($property === 'form.type_id') {
            $this->form->reset(['is_veteran', 'is_age_advanced', 'is_bedridden', 'is_disabled', 'city', 'place_id']);
        }
    }

    public function save()
    {
        $this->validate();

        $this->form->store();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.registers.create',[
            'types' => Type::whereIn('id', ['1', '2', '6'])->get(),
            'places' => Place::all(),
        ]);
    }
}
