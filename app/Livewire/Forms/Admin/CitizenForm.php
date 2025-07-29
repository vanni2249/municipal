<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Citizen;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CitizenForm extends Form
{
    public $citizen;

    #[Validate('required|string|max:25')]
    public $name;

    #[Validate('nullable|email|unique:citizens,email')]
    public $email;
    
    #[Validate('nullable|numeric|digits_between:10,15')]
    public $phone;

    #[Validate('nullable|string')]
    public $address;

    #[Validate('nullable|string')]
    public $city;

    #[Validate('nullable|numeric')]
    public $postal_code;

    #[Validate('nullable|date')]
    public $birthdate;
   
}
