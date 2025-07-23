<?php

namespace App\Livewire\Admin\Citizens;

use App\Models\Citizen;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $perPage = 10;
    public function render()
    {
        return view('livewire.admin.citizens.index',[
            'citizens' => Citizen::with('user')->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage),
        ]);
    }
}
