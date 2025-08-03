<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.admin.users.index', [
            'users' => User::with('type')
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
