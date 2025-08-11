<?php

namespace App\Livewire\Users\Registers;

use App\Livewire\Forms\User\Register\RegisterForm;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public RegisterForm $form;
    public $user_id;

    public function mount()
    {
        $this->user_id = Auth::user()->id;
        $this->form->user_id = $this->user_id;
    }

    public function save()
    {
        $this->validate();

        $this->form->store();

        $this->dispatch('close-modal', 'create-register-modal');
    }
    public function render()
    {
        return view('livewire.users.registers.index', [
            'registers' => Register::where('type_id', 1)
                ->where('user_id', $this->user_id)
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }
}
