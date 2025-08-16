<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Merchant;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantForm extends Form
{
    public $merchant;
    public $type_id;
    public $name;
    public $lastname;
    public $date_of_birth;
    public $email;
    public $phone;
    public $place_id;
    public $address;
    public $city;
    public $postal_code;

    public function rules(): array
    {
        return [
            'type_id' => 'required|exists:types,id',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email|unique:registers,email,' . ($this->merchant->id ?? 'NULL') . ',id',
            'phone' => 'nullable|string|max:20',
            'place_id' => 'required_if:type_id,3',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:10',
        ];
    }

    public function save()
    {
        $merchant = Register::create([
            'type_id' => $this->type_id,
            'code' => 'MER-' . strtoupper(uniqid()),
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'place_id' => $this->place_id,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'created_by' => 'admin',
            'admin_id' => Auth::guard('admin')->id(),
        ]);

        return redirect()->route('admin.merchants.show', $merchant);
    }

    public function update()
    {
        $this->merchant->update([
            'type_id' => $this->type_id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'place_id' => $this->place_id,
            'address' => $this->address,
            'merchant' => $this->merchant,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('admin.merchants.show', $this->merchant);
    }
}
