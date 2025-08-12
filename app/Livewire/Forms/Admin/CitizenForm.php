<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Citizen;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CitizenForm extends Form
{
    public $citizen;
    public $name;
    public $date_of_birth;
    public $email;
    public $phone;
    public $address;
    public $place_id;
    public $postal_code;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email|unique:citizens,email,' . ($this->citizen->id ?? 'NULL') . ',id',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'place_id' => 'required|exists:places,id',
            'postal_code' => 'required|string|max:10',
        ];
    }

    public function save()
    {
        $citizen = Citizen::create([
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('admin.citizens.show', $citizen);
    }

    public function update()
    {
        $this->citizen->update([
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'place_id' => $this->place_id,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('admin.citizens.show', $this->citizen);
    }
}
