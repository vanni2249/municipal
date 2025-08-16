<?php

namespace App\Livewire\Admin\Visitors;

use App\Livewire\Forms\Admin\VisitorForm;
use App\Models\Register;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public VisitorForm $form;


    public function mount($visitor)
    {
        $this->form->visitor = Register::findOrFail($visitor);
        $this->form->name = $this->form->visitor->name;
        $this->form->date_of_birth = $this->form->visitor->date_of_birth;
        $this->form->email = $this->form->visitor->email;
        $this->form->phone = $this->form->visitor->phone;
        $this->form->address = $this->form->visitor->address;
        $this->form->city = $this->form->visitor->city;
        $this->form->postal_code = $this->form->visitor->postal_code;
    }

    public function save()
    {
        $this->validate();

        $this->form->update();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.visitors.edit');
    }
}
