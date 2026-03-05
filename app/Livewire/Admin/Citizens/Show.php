<?php

namespace App\Livewire\Admin\Citizens;

use App\Models\Account;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public $citizen;

    public function mount($citizen)
    {
        $this->citizen = Account::where('ulid', $citizen)->with([
            'status.statusType',
            'statuses.statusType',
            'applications' => fn($q) => $q->latest(),
            'applications.service',
            'applications.status.statusType',
            'applications.account',
            'applications.account.accountType',
            'applications.account.user',
        ])->first();
    }

    public function menu()
    {
        return [
            [
                'name' => 'Detalle de la cuenta',
                'route' => '#',
            ],
            [
                'name' => 'Direcciones',
                'route' => '#',
            ],
            [
                'name' => 'Aplicaciones',
                'route' => '#',
            ]
        ];
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.citizens.show', [
            'account' => $this->citizen,
            'menu' => $this->menu(),
            'services' => Service::where('account_type_id', $this->citizen->account_type_id)->get(),
        ]);
    }
}
