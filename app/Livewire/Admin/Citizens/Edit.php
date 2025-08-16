<?php

namespace App\Livewire\Admin\Citizens;

use App\Livewire\Forms\Admin\CitizenForm;
use App\Models\Place;
use App\Models\Register;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public CitizenForm $form;
    public $places;


    public function mount($citizen)
    {
        $this->places = Place::all();
        $this->form->citizen = Register::findOrFail($citizen);
        $this->form->name = $this->form->citizen->name;
        $this->form->lastname = $this->form->citizen->lastname;
        $this->form->date_of_birth = $this->form->citizen->date_of_birth;
        $this->form->email = $this->form->citizen->email;
        $this->form->phone = $this->form->citizen->phone;
        $this->form->place_id = $this->form->citizen->place_id;
        $this->form->address = $this->form->citizen->address;
        $this->form->city = $this->form->citizen->city;
        $this->form->postal_code = $this->form->citizen->postal_code;
        $this->form->is_veteran = $this->form->citizen->is_veteran ? true : false;
        $this->form->is_age_advanced = $this->form->citizen->is_age_advanced ? true : false;
        $this->form->is_bedridden = $this->form->citizen->is_bedridden  ? true : false;
        $this->form->is_disability = $this->form->citizen->is_disability    ? true : false;
        $this->form->disability_type = $this->form->citizen->disability_type;
        $this->form->emergency_contact = $this->form->citizen->emergency_contact;
        $this->form->emergency_contact_phone = $this->form->citizen->emergency_contact_phone;
        $this->form->is_disabled = $this->form->citizen->is_disabled ? true : false;
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
