<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use \App\Traits\AccountTypeId;

    public function widgets()
    {
        return [
            [
                'title' => 'Facturas',
                'subtitle' => number_format(\App\Models\Invoice::count()) . ' facturas',
                'value' => number_format(\App\Models\Invoice::sum('amount')),
            ],
            [
                'title' => 'Transacciones',
                'subtitle' => number_format(\App\Models\Transaction::count()) . ' transacciones',
                'value' => number_format(\App\Models\Transaction::sum('amount')),
            ],
            [
                'title' => 'Usuarios',
                'subtitle' => number_format(\App\Models\Account::count()) . ' cuentas',
                'value' => number_format(\App\Models\User::count()),
            ],
            [
                'title' => 'Cuentas',
                'subtitle' => number_format(\App\Models\Account::count()) . ' cuentas',
                'value' => number_format(\App\Models\Account::count()),
            ],
            [
                'title' => 'Total Negocios',
                'value' => number_format(\App\Models\Business::count()),

            ],
            [
                'title' => 'Total Permisos',
                'value' => number_format(\App\Models\Permit::count()),
            ],
            [
                'title' => 'Total Interacciones',
                'value' => number_format(\App\Models\Interaction::count()),
            ],
            [
                'title' => 'Aplicaciones',
                'subtitle' => number_format(\App\Models\Application::whereHas('status', function ($query) {
                    $query->whereHas('statusType', fn ($query) => $query->whereIn('slug', ['pending']));
                })->count()) . ' pendientes',
                'value' => number_format(\App\Models\Application::count()),
            ],
        ];
    }

    public function lists()
    {
        return [
                [
                    'title' => 'Tipos de Cuenta',
                    'total' => number_format(\App\Models\Account::count()),
                    'items' => \App\Models\AccountType::withCount('accounts')->limit(5)->get()->map(function ($accountType) {
                        return [
                            'name' => $accountType->name,
                            'count' => number_format($accountType->accounts_count),
                        ];
                    }),
                ],
                [
                    'title' => 'Tipos de servicio',
                    'total' => number_format(\App\Models\ServiceType::withCount('applications')->count()),
                    'items' => \App\Models\ServiceType::withCount('applications')->limit(5)->get()->map(function ($serviceType) {
                        return [
                            'name' => $serviceType->name,
                            'count' => number_format($serviceType->applications_count),
                        ];
                    }),
                ]

            // [
            //     'title' => 'Ciudadanos',
            //     'value' => number_format(\App\Models\Account::where('account_type_id', $this->getAccountTypeId('citizen'))->count()),
            // ],
            // [
            //     'title' => 'Comerciantes',
            //     'value' => number_format(\App\Models\Account::where('account_type_id', $this->getAccountTypeId('merchant'))->count()),
            // ],
        ];
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.dashboard.index', [
            'widgets' => $this->widgets(),
            'lists' => $this->lists(),
        ]);
    }
}
