<?php

namespace App\Livewire\Admin\Merchants;

use App\Models\Account;
use App\Traits\AccountTypeId;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
     use WithPagination, AccountTypeId;
     
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.merchants.index', [
            'merchants' => Account::with('status', 'status.statusType')
                ->where('account_type_id', $this->getAccountTypeId('merchant'))
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
