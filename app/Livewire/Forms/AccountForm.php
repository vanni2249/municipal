<?php

namespace App\Livewire\Forms;

use App\Traits\AccountNumber;
use App\Traits\AccountUlid;
use App\Traits\StatusTypeId;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AccountForm extends Form
{
    use AccountUlid, AccountNumber, StatusTypeId;

    public $account_type_id;
    public $name;
    public $lastname;
    public $email;
    public $phone;


    public function store()
    {
        $this->validate([
            'account_type_id' => 'required|exists:account_types,id',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:accounts,email',
            'phone' => 'nullable|string|max:20',
        ]);

        $account = \App\Models\Account::create([
            'ulid' => $this->createAccountUlid(),
            'number' => $this->createAccountNumber(),
            'account_type_id' => $this->account_type_id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $account->statuses()->create([
            'status_type_id' => $this->getStatusTypeId('active'),
        ]);

        return $account;
    }
}
