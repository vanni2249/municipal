<?php

namespace App\Livewire\Admin\Citizens;

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
        return view('livewire.admin.citizens.index', [
            'citizens' => Account::with('status', 'status.statusType')
                ->where('account_type_id', $this->getAccountTypeId('citizen'))
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
