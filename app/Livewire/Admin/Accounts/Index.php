<?php

namespace App\Livewire\Admin\Accounts;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class Index extends Component
{
    use WithPagination;

    public function mount()
    {
    }

    public function placeholder()
    {
        return view('placeholders.views.partials.header-table-skeleton');
    }
    
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.accounts.index', [
            'accounts' => Account::with('status')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
