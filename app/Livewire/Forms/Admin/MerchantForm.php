<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MerchantForm extends Form
{
    public $merchant;
    public $name;
    public $date_of_birth;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:merchants,email,' . ($this->merchant->id ?? 'NULL') . ',id',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
        ];
    }

    public function save()
    {
        $merchant = Merchant::create([
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'admin_id' => Auth::guard('admin')->id(),
        ]);

        return redirect()->route('admin.merchants.show', $merchant);
    }

    public function update()
    {
        $this->merchant->update([
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'merchant' => $this->merchant,
            'postal_code' => $this->postal_code,
        ]);

        return redirect()->route('admin.merchants.show', $this->merchant);
    }
}
