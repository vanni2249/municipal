<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
   
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.users.index');
    }
}
