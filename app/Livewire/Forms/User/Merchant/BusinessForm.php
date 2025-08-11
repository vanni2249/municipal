<?php

namespace App\Livewire\Forms\User\Merchant;

use Livewire\Attributes\Validate;
use Livewire\Form;

class BusinessForm extends Form
{
    public $register;
    public $business_category_id;
    public $name;
    public $merchant_number;

    public function rules(): array
    {
        return [
            'business_category_id' => 'required',
            'name' => 'required|string|max:255',
            'merchant_number' => 'nullable|string|max:50',
        ];
    }

    public function store()
    {

        $business = $this->register->businesses()->create([
            'business_category_id' => $this->business_category_id,
            'name' => $this->name,
            'merchant_number' => $this->merchant_number,
        ]);

        return redirect()->route('users.merchants.businesses.show', [
            'merchant' => $this->register->id,
            'business' => $business->id,
        ]);

    }
}
