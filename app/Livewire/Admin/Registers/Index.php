<?php

namespace App\Livewire\Admin\Registers;

use App\Models\Register;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;
    public $date_of_birth;
    public $is_veteran = false;
    public $is_age_advanced = false;
    public $is_bedridden = false;
    public $is_disabled = false;

    public function createRegister()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255|unique:registers,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
        ]);

        Register::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'date_of_birth' => $this->date_of_birth,
            'is_veteran' => $this->is_veteran,
            'is_age_advanced' => $this->is_age_advanced,
            'is_bedridden' => $this->is_bedridden,
            'is_disabled' => $this->is_disabled,
        ]);

        $this->reset();
        $this->dispatch('close-modal', 'create-register-modal');
    }

    public function render()
    {
        return view('livewire.admin.registers.index', [
            'registers' => Register::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
