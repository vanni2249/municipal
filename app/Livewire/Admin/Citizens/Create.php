<?php

namespace App\Livewire\Admin\Citizens;

use App\Livewire\Forms\Admin\CitizenForm;
use App\Models\Place;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public CitizenForm $form;
    public $places;

    public function mount()
    {
        $this->places = Place::all();
    }

    public function save()
    {
        $this->validate();

        $this->form->save();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.citizens.create');
    }
}
