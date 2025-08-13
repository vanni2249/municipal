<?php

namespace App\Livewire\Admin\Visitors;

use App\Livewire\Forms\Admin\CitizenForm;
use App\Livewire\Forms\Admin\VisitorForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public VisitorForm $form;


    public function save()
    {
        $this->validate();

        $this->form->save();
    }

    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.visitors.create');
    }
}
