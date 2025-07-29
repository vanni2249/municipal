<?php

namespace App\Livewire\Admin\Citizens;

use App\Livewire\Forms\Admin\CitizenForm;
use App\Models\Citizen;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Show extends Component
{
    public $citizen;
    public CitizenForm $form;

    public function mount($citizen)
    {
        $this->citizen = $citizen->load('user');
        $this->form->name = $this->citizen->name;
        $this->form->email = $this->citizen->email;
        $this->form->phone = $this->citizen->phone;
        $this->form->address = $this->citizen->address;
        $this->form->city = $this->citizen->city;
        $this->form->postal_code = $this->citizen->postal_code;
        $this->form->birthdate = $this->citizen->date_of_birth;
    }

    public function save()
    {
        $this->validate([
            'form.email' =>  Rule::unique('citizens', 'email')->ignore($this->citizen->id),
        ]);

        $this->citizen->update([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'phone' => $this->form->phone,
            'address' => $this->form->address,
            'city' => $this->form->city,
            'postal_code' => $this->form->postal_code,
            'date_of_birth' => $this->form->birthdate,
        ]);

        $this->dispatch('close-modal', 'edit-citizen-modal');
    }

    public function delete()
    {
        $this->citizen->delete();
        $this->redirect(route('admin.citizens.index'));
    }

    public function render()
    {
        return view('livewire.admin.citizens.show', [
            'citizen' => $this->citizen
        ]);
    }
}
