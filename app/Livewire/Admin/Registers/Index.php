<?php

namespace App\Livewire\Admin\Registers;

use App\Models\Register;
use App\Models\Type;
use App\Models\UserCategory;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // public $type_id;
    // public $name;
    // public $email;
    // public $phone;
    // public $address;
    // public $city;
    // public $postal_code;
    // public $date_of_birth;
    // public $is_veteran = false;
    // public $is_age_advanced = false;
    // public $is_bedridden = false;
    // public $is_disabled = false;


    // public function updated($property)
    // {
    //     if($property === 'type_id') {
    //         $this->reset(['is_veteran', 'is_age_advanced', 'is_bedridden', 'is_disabled']);
    //     }
    // }

    // public function createRegister()
    // {
    //     $this->validate([
    //         'type_id' => 'required',
    //         'name' => 'required|string|max:255',
    //         'email' => 'nullable|email|max:255|unique:registers,email',
    //         'phone' => 'nullable|string|max:20',
    //         'address' => 'nullable|string|max:255',
    //         'city' => 'nullable|string|max:100',
    //         'postal_code' => 'nullable|string|max:20',
    //         'date_of_birth' => 'nullable|date',
    //     ]);

    //     Register::create([
    //         'type_id' => $this->type_id,
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'phone' => $this->phone,
    //         'address' => $this->address,
    //         'city' => $this->city,
    //         'postal_code' => $this->postal_code,
    //         'date_of_birth' => $this->date_of_birth,
    //         'is_veteran' => $this->is_veteran,
    //         'is_age_advanced' => $this->is_age_advanced,
    //         'is_bedridden' => $this->is_bedridden,
    //         'is_disabled' => $this->is_disabled,
    //     ]);

    //     $this->reset();
    //     $this->dispatch('close-modal', 'create-register-modal');
    // }


    #[Layout('components.layouts.admin.index')]
    public function render()
    {
        return view('livewire.admin.registers.index', [
            'types' => Type::whereIn('id', [1, 2, 6])->get(),
            'registers' => Register::with(['type'])->orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
