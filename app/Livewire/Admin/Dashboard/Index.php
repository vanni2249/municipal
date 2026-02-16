<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    use \App\Traits\AccountTypeId;

    public $labels;
    public $data = [];

    public function mount()
    {
        $this->labels = $this->labels();
        $this->data = $this->data();

        // dd($this->labels);
        // $this->chartLabel = 'Aplicaciones por día';
    }

    public function widgets()
    {
        return [
            [
                'title' => 'Facturas',
                'subtitle' => number_format(\App\Models\Invoice::count()),
                'value' => '$' . number_format(\App\Models\Invoice::sum('amount'), 2),
            ],
            [
                'title' => 'Transacciones',
                'subtitle' => number_format(\App\Models\Transaction::count()),
                'value' => '$' . number_format(\App\Models\Transaction::sum('amount'), 2),
            ],
            [
                'title' => 'Usuarios',
                'value' => number_format(\App\Models\User::count()),
            ],
            [
                'title' => 'Cuentas',
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
                // 'subtitle' => number_format(\App\Models\Application::whereHas('status', function ($query) {
                //     $query->whereHas('statusType', fn ($query) => $query->whereIn('slug', ['pending']));
                // })->count()) . ' pendientes',
                'value' => number_format(\App\Models\Application::count()),
            ],
        ];
    }

    public function labels()
    {
        // Get days of the current month
        $days = range(1, now()->daysInMonth);
        return collect($days)->map(function ($day) {
            return now()->startOfMonth()->addDays($day - 1)->format('M d');
        })->toArray();
    }

    // public function data()
    // {
    //     $data = [];
    //     $days = range(1, now()->daysInMonth);
    //     foreach ($days as $day) {
    //         $count = \App\Models\Application::whereDay('created_at', $day)->count();
    //         $data[] = $count;
    //     }
    //     return $data;
    // }

    public function data()
    {
        // freturn ake data for the current month
        $data = [];
        $days = range(1, now()->daysInMonth);
        foreach ($days as $day) {
            $count = \App\Models\Application::whereDay('created_at', $day)->count() + rand(10, 50);
            $data[] = $count;
        }
        return $data;
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
                ],
                [
                    'title' => 'Tipos de negocio',
                    'total' => number_format(\App\Models\BusinessType::withCount('businesses')->count()),
                    'items' => \App\Models\BusinessType::withCount('businesses')->limit(5)->get()->map(function ($businessType) {
                        return [
                            'name' => $businessType->name,
                            'count' => number_format($businessType->businesses_count),
                        ];
                    }),
                ],
                [
                    'title' => 'Tipos de inspección',
                    'total' => number_format(\App\Models\InspectionType::withCount('inspections')->count()),
                    'items' => \App\Models\InspectionType::withCount('inspections')->limit(5)->get()->map(function ($inspectionType) {
                        return [
                            'name' => $inspectionType->name,
                            'count' => number_format($inspectionType->inspections_count),
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

    public function placeholder()
    {
        return view('placeholders.views.admins.dashboard');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.dashboard.index', [
            'widgets' => $this->widgets(),
            'lists' => $this->lists(),
            // 'labels' => $this->labels(),
            // 'data' => $this->data(),
        ]);
    }
}
