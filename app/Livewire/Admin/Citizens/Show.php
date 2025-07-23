<?php

namespace App\Livewire\Admin\Citizens;

use Livewire\Component;

class Show extends Component
{
    public $citizen;
    public function render()
    {
        return view('livewire.admin.citizens.show', [
            'citizen' => $this->citizen->load(['user' => function ($query) {
                $query->select('id', 'name', 'email', 'phone', 'approved_at', 'created_at', 'last_login_at');
            }]),
        ]);
    }
}
