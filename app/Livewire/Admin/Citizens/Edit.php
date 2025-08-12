<?php

namespace App\Livewire\Admin\Citizens;

use App\Livewire\Forms\Admin\CitizenForm;
use App\Models\Citizen;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public CitizenForm $form;
    public $places;


    public function mount($citizen)
    {
        $this->places = Place::all();
        $this->form->citizen = Citizen::findOrFail($citizen);
        $this->form->name = $this->form->citizen->name;
        $this->form->date_of_birth = $this->form->citizen->date_of_birth;
        $this->form->email = $this->form->citizen->email;
        $this->form->phone = $this->form->citizen->phone;
        $this->form->address = $this->form->citizen->address;
        $this->form->place_id = $this->form->citizen->place_id;
        $this->form->postal_code = $this->form->citizen->postal_code;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.citizens.edit');
    }
}
