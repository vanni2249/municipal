<?php

namespace App\Livewire\Admin\Components;

use App\Livewire\Forms\AccountForm;

use Livewire\Component;

class AccountCreate extends Component
{
    public AccountForm $form;

    public function save()
    {
        $account = $this->form->store();

        if (!$account) {
            $this->dispatch('close-modal', 'create-account-modal');
            return;
        }

        return $this->redirect( route('admin.accounts.show', ['department' => request()->department(), 'account' => $account->ulid]), navigate:true);

    }

    public function render()
    {
        return view('livewire.admin.components.account-create', [
            'accountTypes' => \App\Models\AccountType::all(),
        ]);
    }
}
