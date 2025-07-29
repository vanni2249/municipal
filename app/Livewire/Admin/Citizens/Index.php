<?php

namespace App\Livewire\Admin\Citizens;

use App\Livewire\Forms\Admin\CitizenForm;
use App\Models\Citizen;
use Livewire\Component;

class Index extends Component
{
    public CitizenForm $form;

    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $perPage = 10;

     public function save()
    {
        $this->validate();

        Citizen::create([
            'name' => $this->form->name,
            'email' => $this->form->email,
            'phone' => $this->form->phone,
            'address' => $this->form->address,
            'city' => $this->form->city,
            'postal_code' => $this->form->postal_code,
            'date_of_birth' => $this->form->birthdate,
        ]);
        $this->reset('form');
        $this->dispatch('close-modal', 'create-citizen-modal');

    }
    public function render()
    {
        return view('livewire.admin.citizens.index',[
            'citizens' => Citizen::with('user')->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage),
        ]);
    }
}
